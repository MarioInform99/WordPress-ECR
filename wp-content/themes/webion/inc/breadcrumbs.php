<?php
/**
 * Theme Breadcrumbs.
 *
 * @package Webion
 */

/**
 * Retrieve a holder for breadcrumbs options.
 *
 * @since  1.0.0
 * @return array
 */

function webion_get_breadcrumbs_options() {
	/**
	 * Filter a holder for breadcrumbs options.
	 *
	 * @since 1.0.0
	 */

	if ( is_singular( 'post' ) ) {
		$show_title = webion_theme()->customizer->get_value( 'breadcrumbs_single_post_page_title' );
	}

	if ( class_exists('WooCommerce') && is_product() ) {
		$show_title = webion_theme()->customizer->get_value( 'breadcrumbs_product_page_title' );
	}

	if ( is_home() ) {
		$show_title = webion_theme()->customizer->get_value( 'breadcrumbs_blog_page_title' );
	}

	if ( is_page() || is_404() || is_search() || is_category() || is_tag() || is_day() || is_month() || is_year() || ( class_exists('WooCommerce') && ( is_shop() || is_product_category() ) ) ) {
		$show_title = webion_theme()->customizer->get_value( 'breadcrumbs_page_title_visibillity' );
	}

	return apply_filters( 'webion-theme/breadcrumbs/options' , array(
		'wrapper_format'    => '<div class="container-fullwidth"><div class="breadcrumbs_items">%1$s%2$s</div></div>',
		'separator'         => '/',
		'show_browse'       => false,
		'show_on_front'     => webion_theme()->customizer->get_value( 'breadcrumbs_front_visibillity' ),
		'show_title'        => $show_title,
		'page_title_format' => '<h4 class="breadcrumbs__title">%s</h4>',
		'path_type'         => webion_theme()->customizer->get_value( 'breadcrumbs_path_type' ),
		'strings' => array(
			'error_404'      => esc_html__( '404 Not Found', 'webion' ),
			'archives'       => esc_html__( 'Archives', 'webion' ),
			'search'         => esc_html__( 'Search results for &#8220;%s&#8221;', 'webion' ),
			'paged'          => esc_html__( 'Page %s', 'webion' ),
			'archive_minute' => esc_html__( 'Minute %s', 'webion' ),
			'archive_week'   => esc_html__( 'Week %s', 'webion' ),
		),
		'date_labels' => array(
			'archive_minute_hour' => esc_html_x( 'g:i a', 'minute and hour archives time format', 'webion' ),
			'archive_minute'      => esc_html_x( 'i', 'minute archives time format', 'webion' ),
			'archive_hour'        => esc_html_x( 'g a', 'hour archives time format', 'webion' ),
			'archive_year'        => esc_html_x( 'Y', 'yearly archives date format', 'webion' ),
			'archive_month'       => esc_html_x( 'F', 'monthly archives date format', 'webion' ),
			'archive_day'         => esc_html_x( 'j', 'daily archives date format', 'webion' ),
			'archive_week'        => esc_html_x( 'W', 'weekly archives date format', 'webion' ),
		),
		'css_namespace'     => array(
			'module'    => 'breadcrumbs',
			'content'   => 'breadcrumbs_content',
			'wrap'      => 'breadcrumbs_wrap',
			'browse'    => 'breadcrumbs_browse',
			'item'      => 'breadcrumbs_item',
			'separator' => 'breadcrumbs_item_sep',
			'link'      => 'breadcrumbs_item_link',
			'target'    => 'breadcrumbs_item_target',
		),
	) );
}

