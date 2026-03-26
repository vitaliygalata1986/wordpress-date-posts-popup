<?php

defined('ABSPATH') || exit;

spl_autoload_register(function ($class) {
    $prefix = 'Vitos\\DatePostsPopup\\';
    $base_dir = DPP_PATH . 'includes/';

    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    $relative = substr($class, strlen($prefix));
    $parts = explode('\\', $relative);

    $class_name = array_pop($parts);
    $subdir = strtolower(implode('/', $parts));

    $file = 'class-' . strtolower(str_replace('_', '-', $class_name)) . '.php';

    $path = rtrim($base_dir, '/\\') . '/' . ($subdir ? $subdir . '/' : '') . $file;

    if (file_exists($path)) {
        require_once $path;
    }
});
