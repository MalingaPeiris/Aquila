<?php
/**
 *
 * enqeue theme assets
 *
 * @package aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //load classes

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('enqueue_block_assets', [$this, 'enqueue_editor_assets']);
    }

    public function register_styles()
    {
        //register styles
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', false, 'all');
        wp_register_style('slick-css', AQUILA_BUILD_LIB_URI . '/css/slick.css', [], false, 'all');
        wp_register_style('slick-theme-css', AQUILA_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all');
        wp_register_style('main-css', AQUILA_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/main.css'), 'all');    
       
        //enqueue styles
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('main-css');
        wp_enqueue_style('slick-css');
        wp_enqueue_style('slick-theme-css');

        

    }

    public function register_scripts()
    {
        //register scripts
        wp_register_script('slick-js', AQUILA_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, 'all');
        wp_register_script('main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery', 'slick-js'], filemtime(AQUILA_BUILD_JS_DIR_PATH . '/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true);

        //enqueue scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('slick-js');

    }

    public function enqueue_editor_assets()
    {
        $assets_config_file = sprintf('%s/assets.php', AQUILA_BUILD_PATH);

        if (!file_exists($assets_config_file)) {
            return;
        }

        $assets_config = require_once $assets_config_file;

        if (empty($assets_config['js/editor.js'])) {
            return;
        }

        $editor_assest = $assets_config['js/editor.js'];
        $js_dependencies = (!empty($editor_assest['dependencies'])) ? $editor_assest['dependencies'] : [];
        $version = (!empty($editor_assest['version'])) ? $editor_assest['version'] : filemtime($assets_config_file);

        //theme gutenberg block JS 
        if (is_admin()) {
            wp_enqueue_script(
                'aquila-block-js',
                AQUILA_BUILD_JS_URI . './blocks.js',
                $js_dependencies,
                $version,
                true
            );
        }


        //thene gutenberg blocks css
        $css_dependencies = [
            'wp-block-library-theme',
            'wp-block-library',
        ];

        wp_enqueue_style(
            'quila-blocks-css',
            AQUILA_BUILD_CSS_URI . '/blocks.css',
            $css_dependencies,
            filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/blocks.css'),
            'all',
        );
    }
}