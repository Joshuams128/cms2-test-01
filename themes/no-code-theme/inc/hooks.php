<?php
/**
 * enquene block editor assets
 */
function cm2_test_01_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'cm2-test-01-block-editor',
		get_theme_file_uri( 'assets/js/block-editor.js' ),
		array( 
			'wp-blocks', 
			'wp-dom-ready', 
			'wp-edit-post' 
		)
	);
} 

add_action( 'enqueue_block_editor_assets', 'cm2_test_01_enqueue_block_editor_assets' );


function cm2_test_01_enqueue_block_assets() {
	wp_enqueue_style(
		'cm2-test-01-block-styles',
		get_theme_file_uri( 'assets/css/block-styles.css' ),
	);
} 

add_action( 'enqueue_block_assets', 'cm2_test_01_enqueue_block_assets' );