<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

get_header();

	do_action( 'webion-theme/site/site-content-before', 'archive' ); ?>

	<div <?php webion_content_class() ?>>

		<header class="page-header row">
			<div class="row">
				<?php
					the_archive_title( '<h1 class="page-title h2-style col-md-12">', '</h1>' );
					the_archive_description( '<div class="archive-description col-xs-12 col-md-8 col-md-push-2">', '</div>' );
				?>
			</div>

		</header><!-- .page-header -->

		<div class="container">
			<div class="row">
				<?php do_action( 'webion-theme/site/primary-before', 'archive' ); ?>

				<div id="primary" <?php webion_primary_content_class(); ?>>

					<?php do_action( 'webion-theme/site/main-before', 'archive' ); ?>

					<main id="main" class="site-main"><?php
						if ( have_posts() ) :

							webion_theme()->do_location( 'archive', 'template-parts/posts-loop' );

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?></main><!-- #main -->

					<?php do_action( 'webion-theme/site/main-after', 'archive' ); ?>

				</div><!-- #primary -->

				<?php do_action( 'webion-theme/site/primary-after', 'archive' ); ?>

				<?php get_sidebar(); // Loads the sidebar.php template.  ?>
			</div>
		</div>
	</div>

	<?php do_action( 'webion-theme/site/site-content-after', 'archive' );

get_footer();
