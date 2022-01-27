<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

$avatar_visible = webion_theme()->customizer->get_value( 'blog_post_author_avatar' );
$avatar = '';
if( $avatar_visible ) {
	$avatar = get_avatar( get_the_author_meta( 'user_email', $author_id ), 45, '', esc_attr( get_the_author_meta( 'nickname', $author_id ) ) );
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-item'); ?>>
	
	<?php webion_post_thumbnail( 'webion-thumb-search-result' ); ?>

	<div class="posts-list__item-content">
		<header class="entry-header">
			<div class="entry-meta"><?php

				webion_posted_on();
                webion_posted_by( array( 'prefix' => $avatar . esc_html__( 'by', 'webion' ) ) );

			?></div><!-- .entry-meta -->
			<h3 class="entry-title"><?php
				webion_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h3>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<div class="entry-footer-container">
				<div class="post__button-wrap"><?php
					webion_post_link( array(
						'class' 	=> 'btn-primary'
					) );
				?></div>
			</div>
		</footer><!-- .entry-footer -->
	</div><!-- .posts-list__item-content -->
</article><!-- #post-<?php the_ID(); ?> -->
