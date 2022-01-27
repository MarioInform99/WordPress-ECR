<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Webion
 */
?>

<?php do_action( 'webion-theme/widget-area/render', 'footer-area' ); ?>

<div <?php webion_footer_class(); ?>>
	<div class="space-between-content">
		<?php webion_footer_logo(); ?>

		<div class="footer-info__holder">
			<?php webion_footer_copyright(); ?>
			<?php webion_footer_menu(); ?>
		</div>
	</div>
</div><!-- .container -->

<?php webion_footer_newsletter_popup(); ?>
