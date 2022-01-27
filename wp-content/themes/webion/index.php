<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */
get_header();

	do_action( 'webion-theme/site/site-content-before', 'index' ); ?>

	<div <?php webion_content_class() ?>>
		
		<?php webion_blog_page_title(); ?>

        <?php webion_blog_title(); ?>

		<div class="row">

			<?php do_action( 'webion-theme/site/primary-before', 'index' ); ?>

			<div id="primary" <?php webion_primary_content_class(); ?>>

				<?php do_action( 'webion-theme/site/main-before', 'index' ); ?>

				<main id="main" class="site-main"><?php
					if ( have_posts() ) :

						webion_theme()->do_location( 'archive', 'template-parts/posts-loop' );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?></main><!-- #main -->

				<?php do_action( 'webion-theme/site/main-after', 'index' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'webion-theme/site/primary-after', 'index' ); ?>

			<?php
				get_sidebar(); // Loads the sidebar.php template.
			?>
		</div>
	</div>

	<?php do_action( 'webion-theme/site/site-content-after', 'index' );

get_footer();
