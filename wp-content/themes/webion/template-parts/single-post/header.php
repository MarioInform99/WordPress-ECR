<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

?>

<header class="entry-header">

    <?php webion_post_thumbnail( 'full', array( 'link' => false ) ); ?>

	<h1 class="entry-title h3-style"><?php
		webion_sticky_label();
		the_title();
	?></h1>

    <?php get_template_part( 'template-parts/single-post/meta' ); ?>

</header><!-- .entry-header -->
