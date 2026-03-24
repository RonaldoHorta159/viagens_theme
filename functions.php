<?php
/**
 * Viagens Machupicchu — Theme Functions
 *
 * @package viagens-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// -------------------------------------------------------------------------
// Theme Support
// -------------------------------------------------------------------------
function viagens_theme_setup() {
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails.
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'viagens_theme_setup' );

// -------------------------------------------------------------------------
// Enqueue Styles & Scripts
// -------------------------------------------------------------------------
function viagens_enqueue_assets() {
    wp_enqueue_style(
        'viagens-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'viagens_enqueue_assets' );
