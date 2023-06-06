<?php
/**
 * Block styles.
 *
 * @package lhotse
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function lhotse_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'lhotse-flat-button',
			'label' => __( 'Flat button', 'lhotse' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'lhotse-navigation-button',
			'label' => __( 'Button style', 'lhotse' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'lhotse-list-underline',
			'label' => __( 'Underlined list items', 'lhotse' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'lhotse-box-shadow',
			'label' => __( 'Box shadow', 'lhotse' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'lhotse-box-shadow',
			'label' => __( 'Box shadow', 'lhotse' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'lhotse-box-shadow',
			'label' => __( 'Box shadow', 'lhotse' ),
		)
	);
}
add_action( 'init', 'lhotse_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function lhotse_unregister_block_style() {
	wp_enqueue_script(
		'lhotse-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		LHOTSE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'lhotse_unregister_block_style' );
