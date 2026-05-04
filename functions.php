<?php
/**
 * PTA Blocks theme bootstrap
 */
defined('ABSPATH') || exit;

define('PTA_BLOCKS_VERSION', wp_get_theme()->get('Version'));

add_action('after_setup_theme', static function (): void {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'script', 'style']);
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    register_nav_menus([
        'pta-primary-nav' => __('Primary Navigation', 'pta-blocks'),
        'pta-footer-nav'  => __('Footer Navigation',  'pta-blocks'),
    ]);
});

add_action('init', static function (): void {
    register_block_pattern_category('pta-blocks', [
        'label' => __('PTA Blocks', 'pta-blocks'),
    ]);
});
