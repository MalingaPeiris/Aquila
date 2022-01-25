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
        add_action('init', [$this, 'register_block_pattern_category']);
    }

    public function register_block_patterns()
    {
        if (function_exists('register_block_pattern')) {

            /**
             * cover pattern
             */
            $cover_content = $this->get_pattern_content('template-parts/patterns/cover');

            register_block_pattern(
                'aquila/cover',
                [
                    'title' => __('Aquila Cover', 'aquila'),
                    'description' => __('Aquila Cover Block with image and text', 'aquila'),
                    'categories' => ['cover'],
                    'content' => $cover_content,
                ]
            );


            /**
             * two column pattern
             */
            $two_columns_content = $this->get_pattern_content('template-parts/patterns/two-columns');

            register_block_pattern(
                'aquila/two-columns',
                [
                    'title' => __('Aquila Two Column', 'aquila'),
                    'description' => __('Aquila two column with heading and text', 'aquila'),
                    'categories' => ['columns'],
                    'content' => $two_columns_content,
                ]
            );
        }
    }

    public function get_pattern_content($template_path)
    {
        ob_start();

        get_template_part($template_path);

        $pattern_content = ob_get_contents();

        ob_end_clean();

        return $pattern_content;
    }

    public function register_block_pattern_category()
    {
        $pattern_categories = [
            'cover' => __('Cover', 'aquila'),
            'columns' => __('Columns', 'aquila'),
        ];
        if (!empty($pattern_categories) && is_array($pattern_categories)) {
            foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
                register_block_pattern_category(
                    $pattern_category,
                    ['label' => $pattern_category_label]
                );
            }
        }
    }
}
