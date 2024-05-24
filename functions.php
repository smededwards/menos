<?php
/**
 * Functions, definitions, hooks, and filters for the theme.
 */

/**
 * Enqueue the styles and scripts for the theme.
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'menos-style', get_template_directory_uri() . '/build/index.css' );
    wp_enqueue_script( 'menos-script', get_template_directory_uri() . '/build/index.js', array(), '1.0', true );
} );
