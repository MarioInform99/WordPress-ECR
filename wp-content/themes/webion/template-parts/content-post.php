<?php
/**
 * Post content template (fallback for single location)
 */

$pf = get_post_format();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

    get_template_part( 'template-parts/single-post/content', $pf );
	get_template_part( 'template-parts/single-post/footer' );
	get_template_part( 'template-parts/single-post/post_navigation' );

?></article><?php

get_template_part( 'template-parts/single-post/content-author-bio' );
get_template_part( 'template-parts/single-post/comments' );
webion_related_posts();
