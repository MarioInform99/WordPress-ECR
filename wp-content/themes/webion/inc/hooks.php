<?php
/**
 * Theme hooks.
 *
 * @package Webion
 */

// Adds the meta viewport to the header.
add_action( 'wp_head', 'webion_meta_viewport', 0 );

// Additional body classes.
add_filter( 'body_class', 'webion_extra_body_classes' );

// Enqueue sticky menu if required.
add_filter( 'webion-theme/assets-depends/script', 'webion_enqueue_misc' );

// Additional image sizes for media gallery.
add_filter( 'image_size_names_choose', 'webion_image_size_names_choose' );

// Modify a comment form.
add_filter( 'comment_form_defaults', 'webion_modify_comment_form' );


// Modify background-image dynamic css variables.
add_filter( 'cherry_css_variables', 'webion_modify_bg_img_variables', 10, 2 );


// Add invert classes if breadcrumbs sections is darken.
add_filter( 'cx_breadcrumbs/wrapper_classes', 'webion_breadcrumbs_wrapper_classes' );

// Add dynamic css function.
add_filter( 'cx_dynamic_css/func_list', 'webion_add_dynamic_css_function' );

// Add has/no thumbnail classes for posts.
add_filter( 'post_class', 'webion_post_thumb_classes' );

//	Callback function for additional fonts in Elementor.
add_filter( 'elementor/fonts/additional_fonts', 'webion_add_additional_fonts' );

//	Remove the parentheses from the category/archive/tag widget.
add_filter( 'wp_list_categories', 'webion_categories_postcount_filter' );
add_filter( 'get_archives_link', 'webion_categories_postcount_filter' );
add_filter( 'wp_tag_cloud', 'webion_tagcloud_postcount_filter');

/**
 * Add has/no thumbnail classes for posts
 *
 * @param  array $classes Existing classes.
 *
 * @return array
 */
function webion_post_thumb_classes( $classes ) {
	$thumb = 'no-thumb';

	if ( has_post_thumbnail() ) {
		$thumb = 'has-thumb';
	}

	$classes[] = $thumb;

	return $classes;
}

/**
 *  Add invert classes if breadcrumbs sections is darken.
 *
 * @param array $wrapper_classes Classes array.
 *
 * @return array
 */
function webion_breadcrumbs_wrapper_classes( $wrapper_classes = array() ) {
	$breadcrumbs_color = get_theme_mod( 'breadcrumbs_text_color', webion_theme()->customizer->get_default( 'breadcrumbs_text_color' ) );

	if ( 'light' === $breadcrumbs_color ) {
		$wrapper_classes[] = 'invert';
	}

	return $wrapper_classes;
}

/**
 * Modify background-image dynamic css variables.
 *
 * @param array $variables CSS variables.
 * @param array $args      Module arguments.
 *
 * @return array
 */
function webion_modify_bg_img_variables( $variables = array(), $args = array() ) {

	$bg_img_variables = array(
		'header_bg_image',
		'page_404_bg_image',
	);

	foreach ( $bg_img_variables as $var ) {
		$variables[ $var ] = esc_url( webion_render_theme_url( $variables[ $var ] ) );
	}

	return $variables;
}


/**
 * Adds the meta viewport to the header.
 *
 * @since  1.0.0
 * @return string `<meta>` tag for viewport.
 */
function webion_meta_viewport() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1" />' . "\n";
}

/**
 * Add extra body classes
 *
 * @param  array $classes Existing classes.
 * @return array
 */
function webion_extra_body_classes( $classes ) {

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a options-based classes.
	$options_based_classes = array();

	$layout      = webion_theme()->customizer->get_value( 'container_type' );
	$blog_layout = webion_theme()->customizer->get_value( 'blog_layout_type' );
	$sb_position = webion_theme()->sidebar_position;
	$sidebar     = webion_theme()->customizer->get_value( 'sidebar_width' );

	array_push( $options_based_classes, 'layout-' . $layout, 'blog-' . $blog_layout );
	if( 'none' !== $sb_position ) {
		array_push( $options_based_classes, 'sidebar_enabled', 'position-' . $sb_position, 'sidebar-' . str_replace( '/', '-', $sidebar ) );
	}

	return array_merge( $classes, $options_based_classes );
}

/**
 * Add misc to theme script dependencies if required.
 *
 * @param  array $depends Default dependencies.
 * @return array
 */
function webion_enqueue_misc( $depends ) {
	$totop_visibility = webion_theme()->customizer->get_value( 'totop_visibility' );

	if ( $totop_visibility ) {
		$depends[] = 'jquery-totop';
	}

	return $depends;
}

/**
 * Add image sizes for media gallery
 *
 * @param  array $classes Existing classes.
 * @return array
 */
function webion_image_size_names_choose( $image_sizes ) {
	$image_sizes['post-thumbnail'] = __( 'Post Thumbnail', 'webion' );

	return $image_sizes;
}

/**
 * Add placeholder attributes for comment form fields.
 *
 * @param  array $args Argumnts for comment form.
 * @return array
 */
function webion_modify_comment_form( $args ) {
	$args = wp_parse_args( $args );

	if ( ! isset( $args['format'] ) ) {
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	}

	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	$html_req  = ( $req ? " required='required'" : '' );
	$html5     = 'html5' === $args['format'];
	$commenter = wp_get_current_commenter();

	$args['label_submit'] = esc_html__( 'Post a Comment', 'webion' );

	$args['fields']['author'] = '<p class="comment-form-author"><label class="control-label">' . esc_html__( 'Name *', 'webion' ) . '</label><input id="author" class="comment-form__field" name="author" type="text" placeholder="' . esc_attr__( 'Your name', 'webion' ) . ( $req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>';

	$args['fields']['email'] = '<p class="comment-form-email"><label class="control-label">' . esc_html__( 'Email *', 'webion' ) . '</label><input id="email" class="comment-form__field" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' placeholder="' . esc_attr__( 'Your email', 'webion' ) . ( $req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p><div class="clear"></div>';

	$args['fields']['url'] = '';

	$args['comment_field'] = '<p class="comment-form-comment"><label class="control-label">' . esc_html__( 'Comment', 'webion' ) . '</label><textarea id="comment" class="comment-form__field" name="comment" placeholder="' . esc_attr__( 'Your comment', 'webion' ) . '" cols="45" rows="7" ></textarea></p>';

	return $args;
}


/**
 * Add dynamic css function.
 *
 * @param array $func_list Function list.
 *
 * @return array
 */
function webion_add_dynamic_css_function( $func_list = array() ) {

	$func_list['background_position'] = 'webion_dynamic_css_background_position';

	return $func_list;
}

/**
 * Callback function for dynamic css function `background_position`.
 *
 * @param string $position Background position.
 *
 * @return bool|string
 */
function webion_dynamic_css_background_position( $position = '' ) {

	if ( empty( $position ) ) {
		return;
	}

	$result = 'background-position: ' . str_replace( '-', ' ', $position );

	return $result;
}

/**
 * Callback function for additional fonts in Elementor.
 */
function webion_add_additional_fonts( $additional_fonts ) {
	
	$additional_fonts[ 'Red Hat Display' ] = 'googlefonts';
	$additional_fonts[ 'Muli' ] = 'googlefonts';

	return $additional_fonts;
}

/**
 * Remove the parentheses from the category widget.
 */
function webion_categories_postcount_filter ($variable) {
   
   $variable = str_replace('(', '<span class="post_count">( ', $variable);
   $variable = str_replace(')', ' )</span>', $variable);
   
   return $variable;
}

/**
 * Remove parentheses from tag cloud count
 */
function webion_tagcloud_postcount_filter ($variable) {
	$variable = str_replace('(', '', $variable);
	$variable = str_replace(')', '', $variable);
	
	return $variable;
}