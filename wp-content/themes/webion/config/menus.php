<?php
/**
 * Menus configuration.
 *
 * @package Webion
 */

add_action( 'after_setup_theme', 'webion_register_menus', 5 );
function webion_register_menus() {

	register_nav_menus( array(
		'main'   => esc_html__( 'Main', 'webion' ),
		'footer' => esc_html__( 'Footer', 'webion' ),
		'social' => esc_html__( 'Social', 'webion' ),
	) );
}
