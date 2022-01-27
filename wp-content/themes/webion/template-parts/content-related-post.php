<?php
/**
 * The template for displaying related posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Webion
 * @subpackage single-post
 */

$columns 		= webion_theme()->customizer->get_value( 'related_posts_grid' );
$thumb_class 	= ( has_post_thumbnail() && $settings['image_visible'] ) ? 'has-thumb' : 'no-thumb';
?>

<div class="<?php echo esc_attr( $grid_class ); ?>">
	<article class="related-post hentry <?php echo esc_attr( $thumb_class ); ?>">
		<?php
		if ( has_post_thumbnail() && $settings['image_visible'] ) {
			webion_post_thumbnail(
				'webion-thumb-related',
				array( 'visible' => $settings['image_visible'] )
			);
		}
		?>
		<div class="related-post__content">
			<header class="entry-header">
                <h5 class="entry-title"><?php
                    the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                    ?></h5>
				<div class="entry-meta"><?php
					webion_posted_on( array(
						'visible' 	=> $settings['date_visible'],
						'prefix' 	=> ''
					) );
					
					webion_posted_by( array(
						'visible' 	=> $settings['author_visible'],
						'prefix' 	=> esc_html__( 'by', 'webion' ),
					) );

					webion_post_comments( array(
						'visible' 	=> $settings['comment_count_visible'],
						'prefix' 	=> 'Comments',
						'postfix' 	=> ''
					) );
					
				?></div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<?php webion_post_excerpt( array(
				'visible' 		=> $settings['excerpt_visible'],
				'words_count' 	=> $settings['excerpt_length']
			)); ?>
		</div>
	</article><!--.related-post-->
</div>
