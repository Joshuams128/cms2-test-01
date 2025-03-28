<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package no-code-theme
 * @since 1.0.0
 */

 // Hooks.
require_once get_theme_file_path( 'inc/hooks.php' );


// enable gutenberg for woocommerce
function activate_gutenberg_product( $can_edit, $post_type ) {
    if ( $post_type == 'product' ) {
           $can_edit = true;
       }
       return $can_edit;
   }
   add_filter( 'use_block_editor_for_post_type', 'activate_gutenberg_product', 10, 2 );
   
   // enable taxonomy fields for woocommerce with gutenberg on
   function enable_taxonomy_rest( $args ) {
       $args['show_in_rest'] = true;
       return $args;
   }
   add_filter( 'woocommerce_taxonomy_args_product_cat', 'enable_taxonomy_rest' );
   add_filter( 'woocommerce_taxonomy_args_product_tag', 'enable_taxonomy_rest' );