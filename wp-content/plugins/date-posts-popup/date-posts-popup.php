<?php

/**
 * Plugin Name: Date Posts Popup
 * Plugin URI:  https://github.com/vitaliygalata1986/wordpress-date-posts-popup
 * Description: Displays posts within a date range via shortcode with popup support.
 * Version:     1.0.0
 * Author:      Vitaliy Halata
 * Author URI:  https://github.com/vitaliygalata1986
 * Text Domain: date-posts-popup
 */

defined('ABSPATH') || exit;

use Vitos\DatePostsPopup\Plugin;

define('DPP_VERSION', '1.0.0');
define('DPP_FILE', __FILE__);
define('DPP_PATH', plugin_dir_path(__FILE__));
define('DPP_URL', plugin_dir_url(__FILE__));

require_once DPP_PATH . 'includes/autoload.php';

function date_posts_popup_init(): void
{
    $plugin = new Plugin();
    $plugin->run();
}

add_action('plugins_loaded', 'date_posts_popup_init');