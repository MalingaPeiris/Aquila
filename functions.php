<?php
/**
 * theme functions.
 *
 * @package aquila
 */

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('AQUILA_BUILD_URI')) {
    define('AQUILA_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('AQUILA_BUILD_PATH')) {
    define('AQUILA_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
}


if (!defined('AQUILA_BUILD_JS_URI')) {
    define('AQUILA_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('AQUILA_BUILD_JS_DIR_PATH')) {
    define('AQUILA_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('AQUILA_BUILD_IMG_URI')) {
    define('AQUILA_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('AQUILA_BUILD_CSS_URI')) {
    define('AQUILA_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('AQUILA_BUILD_CSS_DIR_PATH')) {
    define('AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if ( ! defined( 'AQUILA_BUILD_LIB_URI' ) ) {
	define( 'AQUILA_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

//remove guternberg block librarycss drom landing on the frontend
/**function ebayads_remove_block_styles()
{
    wp_dequeue_style('wp-blocl-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wp-block-style');
}

add_action('wp_enqueue_scripts', 'ebayads_remove_block_styles', 100);
**/