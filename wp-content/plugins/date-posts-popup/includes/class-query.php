<?php

namespace Vitos\DatePostsPopup;

defined('ABSPATH') || exit;

class Query
{
    public function get_posts_by_date_range(string $from, string $to): array
    {
        $args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'ignore_sticky_posts' => true,
            'orderby' => 'date',
            'order' => 'DESC',
            'date_query' => [
                [
                    'after' => $from . ' 00:00:00',
                    'before' => $to . ' 23:59:59',
                    'inclusive' => true,
                    'column' => 'post_date',
                ],
            ],
        ];

        $query = new \WP_Query($args);

        return $query->posts;
    }
}