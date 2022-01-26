<?php

/**
 *
 * Blocks
 *
 * @package aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Blocks
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
        add_action('block_categories_all', [$this, 'add_block_categories']);
    }


    public function add_block_categories($categories)
    {
        $category_slugs = wp_list_pluck($categories, 'slug');

        return in_array('aquuila', $category_slugs, true) ? $categories :
            array_merge(
                $categories,
                [
                    [
                        'slug' => 'aquila',
                        'title' => __('Aquila Blocks', 'aquila'),
                        'icon' => 'table-row-after'
                    ]
                ]
            );
    }
}
