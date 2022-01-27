<?php
/**
 * Posts loop template
 */

do_action( 'webion-theme/blog/before' );

?><div <?php webion_posts_list_class(); ?>><?php

	while ( have_posts() ) : the_post();

		/*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/
		get_template_part( webion_get_post_template_part_slug(), webion_get_post_style() );

	endwhile;

?></div><?php

do_action( 'webion-theme/blog/after' );

get_template_part( 'template-parts/content', 'navigation' );
