<?php

/**
 *
 * block patterns
 *
 * @package aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns
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
        add_action('init', [$this, 'register_block_patterns']);
    }

    public function register_block_patterns()
    {
        if (function_exists('register_block_pattern')) {
            register_block_pattern(
                'aquila/cover',
                [
                    'title' => __('Aquila Cover', 'aquila'),
                    'description' => __('Aquila Cover Block with image and text', 'aquila'),
                    'content' => '<!-- wp:cover {"url":"http://localhost/wordpress/wp-content/uploads/2022/01/anonymous-Tesla-elon-musk.jpg","id":76,"align":"full"} -->
                    <div class="wp-block-cover alignfull has-background-dim"><img class="wp-block-cover__image-background wp-image-76" alt="" src="http://localhost/wordpress/wp-content/uploads/2022/01/anonymous-Tesla-elon-musk.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
                    <h1 class="has-text-align-center"><strong>We do not forget we do not forgive </strong></h1>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"cyan-bluish-gray"} -->
                    <p class="has-text-align-center has-cyan-bluish-gray-color has-text-color">Hello Planet Earth</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons {"contentJustification":"center"} -->
                    <div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Blogs</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div></div>
                    <!-- /wp:cover -->',
                ]
            );
        }
    }
}
