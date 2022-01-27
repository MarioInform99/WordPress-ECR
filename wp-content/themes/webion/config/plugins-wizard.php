<?php
/**
 * Jet Plugins Wizard configuration.
 *
 * @package Webion
 */
$license = array(
	'enabled' => false,
);

/**
 * Plugins configuration
 *
 * @var array
 */
$plugins = array(
	'jet-data-importer' => array(
		'name'   => esc_html__( 'Jet Data Importer', 'webion' ),
		'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'   => 'https://github.com/ZemezLab/jet-data-importer/archive/master.zip',
		'access' => 'base',
	),
	'jet-theme-core' => array(
		'name'   => esc_html__( 'Jet Theme Core', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-theme-core.zip',
		'access' => 'base',
	),
	'elementor' => array(
		'name'   => esc_html__( 'Elementor', 'webion' ),
		'access' => 'base',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'webion' ),
		'access' => 'skins',
	),
	'woocommerce' => array(
		'name'   => esc_html__( 'WooCommerce', 'webion' ),
		'access' => 'skins',
	),
	'jet-elements' => array(
		'name'   => esc_html__( 'Jet Elements For Elementor', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-elements.zip',
		'access' => 'skins',
	),	
	'jet-blocks' => array(
		'name'   => esc_html__( 'Jet Blocks For Elementor', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-blocks.zip',
		'access' => 'skins',
	),
	'jet-tabs' => array(
		'name'   => esc_html__( 'Jet Tabs', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-tabs.zip',
		'access' => 'skins',
	),
	'jet-menu' => array(
		'name'   => esc_html__( 'Jet Menu', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-menu.zip',
		'access' => 'skins',
	),
	'jet-smart-filters' => array(
		'name'   => esc_html__( 'Jet Smart Filters', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-smart-filters.zip',
		'access' => 'skins',
	),
	'jet-woo-builder' => array(
		'name'   => esc_html__( 'Jet Woo Builder', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-woo-builder.zip',
		'access' => 'skins',
	),
	'jet-woo-product-gallery' => array(
		'name'   => esc_html__( 'Jet Woo Product Gallery', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-woo-product-gallery.zip',
		'access' => 'skins',
	),
	'jet-popup' => array(
		'name'   => esc_html__( 'Jet Popup', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-popup.zip',
		'access' => 'skins',
		),
	'jet-tricks' => array(
		'name'   => esc_html__( 'Jet Tricks', 'webion' ),
		'source' => 'remote',
		'path'   => 'https://monstroid.zemez.io/download/jet-tricks.zip',
		'access' => 'skins',
	),
);

/**
 * Skins configuration
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'jet-data-importer',
		'jet-theme-core',
		'elementor',
	),
	'advanced' => array(
		'webion' => array(
			'full'  => array(
				'jet-blocks',
				'jet-elements',
				'jet-tabs',
				'jet-menu',
				'contact-form-7',
				'woocommerce',
				'jet-compare-wishlist',
				'jet-smart-filters',
				'jet-woo-builder',
				'jet-woo-product-gallery',
				'jet-popup',
				'jet-tricks',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp73.template-help.com/wordpress/prod_15696/v4/',
			'thumb'    => get_stylesheet_directory_uri() . '/assets/demo-content/default/default-thumb.jpg',
			'name'  => esc_html__( 'Webion', 'webion' ),
		),						
	),
);

$texts = array(
	'theme-name' => esc_html__( 'Webion', 'webion' ),
);

$config = array(
	'license' => $license,
	'plugins' => $plugins,
	'skins'   => $skins,
	'texts'   => $texts,
);
