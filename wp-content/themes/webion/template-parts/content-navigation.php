<?php
/**
 * Template part for posts navigation.
 *
 * @package Webion
 */

do_action( 'webion-theme/blog/posts-navigation-before' );

the_posts_pagination(
	apply_filters( 'webion-theme/posts/navigation-args',
		array(
			'prev_text' => sprintf(
				'%1$s%2$s',
				webion_get_icon_svg( 'pagin-prev' ),
				'' ),
			'next_text' => sprintf(
				'%1$s%2$s',
				'',
				webion_get_icon_svg( 'pagin-next' ) ),
		)
	)
);

do_action( 'webion-theme/blog/posts-navigation-after' );
