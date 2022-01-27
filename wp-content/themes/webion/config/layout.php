<?php
/**
 * Layout configuration.
 *
 * @package Webion
 */

add_action( 'after_setup_theme', 'webion_set_layout', 5 );
function webion_set_layout() {

	webion_theme()->layout = array(
		'one-right-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-8' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3' ),
			),
		),
		'one-left-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-8', 'col-md-push-4' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4', 'col-md-pull-8' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9', 'col-md-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3', 'col-md-pull-9' ),
			),
		),
		'fullwidth-blog-listing' => array(
			array(
                'content' => array( 'col-xs-12', 'col-md-8', 'col-md-push-2' ),
			),
		),
		'fullwidth' => array(
			array(
				'content' => array( 'col-xs-12' ),
			),
		),
		'single-post-fullwidth' => array(
			array(
				'content' => array( 'col-xs-12' ),
			),
		),
		'shop-layout' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-9', 'col-md-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3', 'col-md-pull-9' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9', 'col-md-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3', 'col-md-pull-9' ),
			),
		),
	);
}
