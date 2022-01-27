<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */



if ( ! has_tag() ) {
	return;
}

?>

<footer class="entry-footer">
	<div class="entry-footer-container">
        <div class="entry-meta"><?php

			webion_post_tags ( array(
				'prefix' 	=> 'Tags:',
				'delimiter' => '',
			) );

			?><div class="entry-sharebox"><?php

            do_action( 'webion-theme/post/sharebox' );

        ?></div>
    </div>

	</div>
</footer><!-- .entry-footer -->
