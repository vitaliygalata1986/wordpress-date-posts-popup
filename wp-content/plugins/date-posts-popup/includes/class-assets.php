<?php

namespace Vitos\DatePostsPopup;

defined('ABSPATH') || exit;

class Assets
{
    public function init(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
    }

    public function register_assets(): void
    {
        wp_register_style(
            'date-posts-popup',
            DPP_URL . 'dist/app.css',
            [],
            DPP_VERSION
        );

        wp_register_script(
            'date-posts-popup',
            DPP_URL . 'dist/app.js',
            [],
            DPP_VERSION,
            true
        );
    }

    public static function enqueue_assets(): void
    {
        wp_enqueue_style('date-posts-popup');
        wp_enqueue_script('date-posts-popup');
    }
}