<?php
/**
 * Bootstrap the theme
 *
 * @package aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load classes
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'height' => 80,
            'width' => 80,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => ['site-title', 'site-description'],
        ]);


        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-image' => "",
        ]);

        add_theme_support('post-thumbnails');

        add_image_size('featured-large', 350, 233, true);

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]);


        

        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        add_editor_style('assets/build/css/editor.css');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }


    }

}