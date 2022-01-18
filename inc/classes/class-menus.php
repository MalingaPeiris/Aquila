<?php
/**
 * 
 * register menus
 * 
 * @package aquila
 */

 namespace Aquila_Theme\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class Menus{
     use Singleton;

     protected function __construct(){
        //load classes

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        //actions
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus([
            'aquila-header-menu'=> esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu'=> esc_html__('Footer Menu', 'aquila'),
        ]);
    }

    
 }