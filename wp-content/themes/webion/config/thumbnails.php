<?php
/**
 * Thumbnails configuration.
 *
 * @package webion
 */

add_action( 'after_setup_theme', 'webion_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function webion_register_image_sizes() {
	set_post_thumbnail_size( 370, 260, true );

	// Registers a new image sizes.
	add_image_size( 'webion-thumb-m', 370, 280, true );
	
	// Posts default listing
	add_image_size( 'webion-thumb-listing', 770, 504, true );
	
	add_image_size( 'webion-thumb-leftward', 560, 420, true ); //	Leftward Style

	add_image_size( 'webion-thumb-grid-3col', 370, 300, true );   // Posts Grid 3 Columns
	add_image_size( 'webion-thumb-grid-2col-sidebar', 370, 300, true );   // default Posts Grid 2 Columns with Sidebar

	add_image_size( 'webion-thumb-nav', 115, 85, true ); // Post Navigation

	add_image_size( 'webion-thumb-related', 124, 114, true ); // Related Posts
	
	add_image_size( 'webion-thumb-post-widget', 80, 80, true ); // Recent Posts Widget
	
	add_image_size( 'webion-thumb-search-result', 180, 240, true ); // Search Result Page

	//	WooCommerce
	add_image_size( 'webion-thumb-wishlist', 60, 91, true ); // Wishlist
	add_image_size( 'webion-thumb-products-cat', 360, 420, true );
	add_image_size( 'webion-thumb-product-archive', 370, 450, true );
	add_image_size( 'webion-thumb-product-single', 560, 600, true );
}
