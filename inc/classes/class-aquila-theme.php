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

        add_theme_support('custom-logo',[
        'height'               => 80,
        'width'                => 80,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => [ 'site-title', 'site-description' ], 
        ]);
    

    add_theme_support('custom-background',[
        'default-color' => '#fff',
        'default-image' => "",
]);
    }
    
}