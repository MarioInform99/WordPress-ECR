<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

?>

<?php do_action( 'webion_extra_post_format_video' ); ?>

<div class="entry-content">
	<?php the_content(); ?>
	<?php wp_link_pages( array(
		'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'webion' ),
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) ); ?>
</div><!-- .entry-content -->