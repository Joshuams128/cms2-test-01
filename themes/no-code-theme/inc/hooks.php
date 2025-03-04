<?php

function cm2_test_01_enqueue_block_editor_asset() {
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

add_action( 'enqueue_block_editor_assets', 'cm2_test_01_enqueue_block_editor_asset' );
