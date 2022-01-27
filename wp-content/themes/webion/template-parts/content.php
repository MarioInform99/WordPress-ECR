<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-default'); ?>>

	<header class="entry-header">
		<h3 class="entry-title"><?php 
			webion_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h3>
		<div class="entry-meta">
			<?php
				webion_posted_by();
				webion_posted_in( array(
					'prefix' => __( 'In', 'webion' ),
				) );
				webion_posted_on( array(
					'prefix' => __( 'Posted', 'webion' )
				) );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php webion_post_thumbnail( 'webion-thumb-l' ); ?>

	<?php webion_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
				webion_post_tags( array(
					'prefix' => __( 'Tags:', 'webion' )
				) );
			?>
			<div><?php
				webion_post_comments( array(
					'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
					'class'  => 'comments-button'
				) );
				webion_post_link();
			?></div>
		</div>
		<?php webion_edit_link(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
