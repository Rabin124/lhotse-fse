<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lhotse
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'LHOTSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function lhotse_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "lhotse-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'lhotse_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function lhotse_styles() {
	wp_enqueue_style(
		'lhotse-style',
		get_stylesheet_uri(),
		[],
		LHOTSE_VERSION
	);
	wp_enqueue_style(
		'lhotse-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		LHOTSE_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'lhotse_styles' );



// Filters.
require_once get_theme_file_path( 'inc/filters.php' );



// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Add inc inside folders 6.11.2023.
// require_once get_theme_file_path( 'admin/' );
// require_once get_theme_file_path( 'block-styles/' );
// require_once get_theme_file_path( 'blocks/' );
// require_once get_theme_file_path( 'compatability/' );
// require_once get_theme_file_path( 'extensions/' );
// require_once get_theme_file_path( 'utilities/' );



// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );
