<?php

namespace Vitos\DatePostsPopup;

defined('ABSPATH') || exit;

class Shortcode
{
    private Query $query;
    private Renderer $renderer;

    public function __construct(Query $query, Renderer $renderer)
    {
        $this->query = $query;
        $this->renderer = $renderer;
    }

    public function init(): void
    {
        add_shortcode('date_posts', [$this, 'render']);
    }

    public function render(array $atts = []): string
    {
        Assets::enqueue_assets();

        $atts = shortcode_atts(
            [
                'from' => '',
                'to' => '',
            ],
            $atts,
            'date_posts'
        );

        $from = $this->sanitize_date($atts['from']);
        $to = $this->sanitize_date($atts['to']);

        if (!$from || !$to) {
            return $this->renderer->render_message('Please provide valid "from" and "to" dates in Y-m-d format.');
        }

        if ($from > $to) {
            return $this->renderer->render_message('"From" date cannot be later than "to" date.');
        }

        $posts = $this->query->get_posts_by_date_range($from, $to);

        if (empty($posts)) {
            return $this->renderer->render_message('No posts found for the selected date range.');
        }

        return $this->renderer->render_posts($posts);
    }

    private function sanitize_date(string $date): string
    {
        $date = trim($date);

        if (!$date) {
            return '';
        }

        $parsed = \DateTime::createFromFormat('Y-m-d', $date);

        if (!$parsed || $parsed->format('Y-m-d') !== $date) {
            return '';
        }

        return $date;
    }
}