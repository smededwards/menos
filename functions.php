<?php
/**
 * Menos functions and definitions.
 *
 * @package Menos
 * @version 0.1.0
 */

 /**
 * Add theme supports and styles.
 *
 * @since 0.1.0
 */
function menos_setup() {

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'menos_setup' );

/**
 * Enqueue styles.
 *
 * @since 0.1.0
 */
function menos_styles() {

	// Register theme stylesheet.
	wp_register_style(
		'menos-styles',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' ),
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'menos-styles' );
}
add_action( 'wp_enqueue_scripts', 'menos_styles' );
