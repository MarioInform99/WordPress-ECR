<?php
/**
 * The template for displaying the header search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

$label 			= webion_theme()->customizer->get_value( 'header_search_label' );
$placeholder 	= webion_theme()->customizer->get_value( 'header_search_placeholder' );
?>

<div class="footer-newsletter-popup">
	<button class="footer-newsletter-popup-close"><?php echo webion_get_icon_svg( 'close' ); ?></button>
	<div class="footer-newsletter-popup__inner">
		<?php echo do_shortcode('[mc4wp_form id="1853"]'); ?>
	</div>
</div>
