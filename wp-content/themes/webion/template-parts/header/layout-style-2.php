<?php
/**
 * The template for displaying the default header layout.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webion
 */

$visible_header_wc_cart 	= webion_theme()->customizer->get_value( 'woo_header_cart_icon' ) && class_exists( 'WooCommerce' );
?>

<div <?php webion_header_class(); ?>>
	<?php do_action( 'webion-theme/header/before' ); ?>
	<div class="space-between-content">

		<?php webion_main_menu_toggle(); ?>

		<div <?php webion_site_branding_class(); ?>>
			<?php webion_header_logo(); ?>
			<?php webion_site_description(); ?>
		</div>

		<div class="site-header__right_part">
			<?php webion_social_list( 'header' ); ?>

			<?php webion_header_search_toggle(); ?>

			<?php if ( $visible_header_wc_cart ) :
				webion_wc_header_cart();
			endif; ?>
		</div>

		<?php webion_header_search_popup(); ?>
	</div>
	
	<div class="header-vertical-menu-popup">
		<div class="header-vertical-menu-popup__inner">
			<button class="menu-toggle-close btn-initial"><?php echo webion_get_icon_svg( 'close' ); ?></button>
			<?php webion_main_menu( 'vertical' ); ?>
		</div>
	</div>
	<?php do_action( 'webion-theme/header/after' ); ?>
</div>
