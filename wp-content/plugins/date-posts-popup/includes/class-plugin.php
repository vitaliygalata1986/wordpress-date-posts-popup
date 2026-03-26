<?php

namespace Vitos\DatePostsPopup;

defined('ABSPATH') || exit;

class Plugin
{
    private Assets $assets;
    private Shortcode $shortcode;
    private Query $query;
    private Renderer $renderer;

    public function __construct()
    {
        $this->assets = new Assets();
        $this->query = new Query();
        $this->renderer = new Renderer();
        $this->shortcode = new Shortcode($this->query, $this->renderer);
    }

    public function run(): void
    {
        $this->assets->init();
        $this->shortcode->init();
    }
}