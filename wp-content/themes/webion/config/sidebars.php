<?php
/**
 * Sidebars configuration.
 *
 * @package Webion
 */

add_action( 'after_setup_theme', 'webion_register_sidebars', 5 );
function webion_register_sidebars() {

	webion_widget_area()->widgets_settings = apply_filters( 'webion-theme/widget_area/default_settings', array(
		'sidebar' => array(
			'name'           => esc_html__( 'Sidebar', 'webion' ),
			'description'    => esc_html__( 'List of widgets to display on blog post pages', 'webion' ),
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h4 class="widget-title">',
			'after_title'    => '</h4>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'sidebar-shop' => array(
			'name'           => esc_html__( 'Shop Sidebar', 'webion' ),
			'description'    => esc_html__( 'List of widgets to display on Shop pages', 'webion' ),
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h4 class="widget-title">',
			'after_title'    => '</h4>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		)
	) );
}
