<?php

defined('ABSPATH') || exit;

function artesa_basic_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );
}

add_action('after_setup_theme', 'artesa_basic_theme_setup');

function artesa_basic_theme_enqueue_assets(): void
{
    wp_enqueue_style(
        'artesa-basic-theme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'artesa_basic_theme_enqueue_assets');