<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Webion
 */

$is_enabled 			= webion_theme()->customizer->get_value( 'post_authorbio_block' );
$author_description 	= get_the_author_meta( 'description' );

if ( ! $is_enabled || empty( $author_description ) ) {
	return;
}

?>

<div class="post-author-bio">
	<div class="post-author__holder">
		<div class="post-author__avatar"><?php
			webion_get_post_author_avatar( array(
				'size' => 120
			) );
		?></div>
		<div class="post-author__content">
			<p class="post-author__role"><?php
				echo esc_html__( 'About Author', 'webion' );
			?></p>
			<h4 class="post-author__title"><?php
				webion_get_post_author();
			?></h4>
			<div class="post-author__description"><?php
				echo esc_html( $author_description );
			?></div>
		</div>
		<div class="post-author__overlay"></div>
	</div>
</div>