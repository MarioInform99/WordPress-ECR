<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Webion
 */
?>

<section class="error-404 not-found">
	<div class="error-numbers"><?php echo esc_html__( '404', 'webion' ); ?></div>
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'The page you’re looking for doesn’t exist', 'webion' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'webion' ); ?></p>
	</div><!-- .page-content -->
</section><!-- .error-404 -->