<?php
/**
 * Post single meta
 *
 * @package Gutenix
 */

$categories_visible = webion_theme()->customizer->get_value( 'single_post_categories' );

if ( 'post' === get_post_type() ) :
	
	echo '<div class="entry-meta">';
		
		webion_posted_by( array(
			'prefix' 	=> '',
		) );
		
		webion_posted_on( array(
			'prefix' 	=> '',
		) );

        webion_posted_in( array(
            'visible' => $categories_visible,
            'prefix' 	=> 'Categories:',
        ) );

		webion_post_comments( array(
			'prefix' 	=> 'Comments',
			'postfix' 	=> ''
		) );

	echo '</div>';

endif;
