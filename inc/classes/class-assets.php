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
    }

    public function register_styles()
    {
        //register styles
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', false, 'all');
        wp_register_style('main-css', AQUILA_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/main.css'), 'all');    
       
        //enqueue styles
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('main-css');

        

    }

    public function register_scripts()
    {
        //register scripts
        wp_register_script('main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery'], filemtime(AQUILA_BUILD_JS_DIR_PATH . '/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true);

        //enqueue scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');

    }
}