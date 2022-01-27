<?php
/**
 * Template part for displaying grid style of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

$sidebar 			= webion_theme()->customizer->get_value( 'blog_sidebar_position' );
$categories_visible = webion_theme()->customizer->get_value( 'blog_post_categories' );
$columns 			= webion_theme()->customizer->get_value( 'blog_layout_columns' );

$avatar_visible = webion_theme()->customizer->get_value( 'blog_post_author_avatar' );
$avatar = '';
if( $avatar_visible ) {
    $avatar = get_avatar( get_the_author_meta( 'user_email', $author_id ), 45, '', esc_attr( get_the_author_meta( 'nickname', $author_id ) ) );
}

$thumbnail 		= 'webion-thumb-listing';
if( ( 'none' == $sidebar ) && ( '2-cols' == $columns ) ) {
	$thumbnail 		= 'webion-thumb-listing';
} elseif( ( 'none' != $sidebar ) && ( '3-cols' == $columns ) ) {
	$thumbnail 		= 'webion-thumb-grid-3col';
} elseif( 'none' != $sidebar ) {
	$thumbnail 		= 'webion-thumb-grid-2col-sidebar';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item grid-item' ); ?>>

	<?php webion_post_thumbnail( $thumbnail ); ?>

    <div class="posts-list__item-content">
        <header class="entry-header">
            <h5 class="entry-title"><?php
                webion_sticky_label();
                the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                ?></h5>

            <div class="entry-meta"><?php
                webion_posted_on();
                webion_post_comments( array(
                    'prefix' 	=> 'Comments ',
                    'postfix' 	=> ''
                ) );

                webion_posted_by( array( 'prefix' => $avatar . esc_html__( 'by', 'webion' ) ) );

                webion_posted_in( array(
                    'visible' 	=> $categories_visible,
                    'prefix' 	=> 'Categories:',
                    'delimiter' => ', '
                ) );

                webion_post_tags( array(
                    'prefix' 	=> 'Tags: ',
                ) );


                ?></div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <?php webion_post_excerpt(); ?>

        <footer class="entry-footer">
            <div class="entry-footer-container">
                <div class="post__button-wrap"><?php
                    webion_post_link();
                    ?></div>
            </div>
        </footer><!-- .entry-footer -->
    </div><!-- .posts-list__item-content -->
</article><!-- #post-<?php the_ID(); ?> -->
