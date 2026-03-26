<?php

namespace Vitos\DatePostsPopup;

defined('ABSPATH') || exit;

class Renderer
{
    public function render_message(string $message): string
    {
        return '<div class="dpp-message">' . esc_html($message) . '</div>';
    }

    public function render_posts(array $posts): string
    {
        ob_start();
        ?>
        <div class="dpp-posts-grid">
            <?php foreach ($posts as $post) : ?>
                <?php
                $post_id       = $post->ID;
                $title         = get_the_title($post_id);
                $permalink     = get_permalink($post_id);
                $date          = get_the_date('d.m.Y', $post_id);
                $excerpt       = get_the_excerpt($post_id);
                $thumb_html    = get_the_post_thumbnail($post_id, 'medium', ['class' => 'dpp-post-card__image']);
                $full_image_url = get_the_post_thumbnail_url($post_id, 'full');
                ?>
                <article class="dpp-post-card">
                    <button
                            type="button"
                            class="dpp-post-card__button"
                            data-dpp-open-popup
                            data-title="<?php echo esc_attr($title); ?>"
                            data-date="<?php echo esc_attr($date); ?>"
                            data-excerpt="<?php echo esc_attr(wp_strip_all_tags($excerpt)); ?>"
                            data-image="<?php echo esc_url($full_image_url ?: ''); ?>"
                            data-link="<?php echo esc_url($permalink); ?>"
                    >
                        <div class="dpp-post-card__thumb">
                            <?php if ($thumb_html) : ?>
                                <?php echo $thumb_html; ?>
                            <?php endif; ?>
                        </div>

                        <div class="dpp-post-card__content">
                            <div class="dpp-post-card__date">
                                <?php echo esc_html($date); ?>
                            </div>

                            <h3 class="dpp-post-card__title">
                                <?php echo esc_html($title); ?>
                            </h3>
                        </div>
                    </button>
                </article>
            <?php endforeach; ?>
        </div>

        <?php echo $this->render_popup(); ?>
        <?php

        return ob_get_clean();
    }

    private function render_popup(): string
    {
        ob_start();
        ?>
        <div class="dpp-popup" data-dpp-popup hidden>
            <div class="dpp-popup__overlay" data-dpp-close-popup></div>

            <div class="dpp-popup__dialog" role="dialog" aria-modal="true" aria-label="Post details">
                <button type="button" class="dpp-popup__close" data-dpp-close-popup aria-label="Close popup">
                    ×
                </button>

                <div class="dpp-popup__image-wrap">
                    <img src="" alt="" class="dpp-popup__image" data-dpp-popup-image>
                </div>

                <div class="dpp-popup__content">
                    <div class="dpp-popup__date" data-dpp-popup-date></div>
                    <h3 class="dpp-popup__title" data-dpp-popup-title></h3>
                    <div class="dpp-popup__excerpt" data-dpp-popup-excerpt></div>
                    <a href="#" class="dpp-popup__link" data-dpp-popup-link>
                        Read more
                    </a>
                </div>
            </div>
        </div>
        <?php

        return ob_get_clean();
    }
}