<?php
/**
 * Bootstrap the theme
 * 
 * @package aquila
 */

 namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME{
    use Singleton;

    protected function __construct(){
        //load classes
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        //actions
        add_action('after_setup_theme', [ $this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag');
    }

    
}