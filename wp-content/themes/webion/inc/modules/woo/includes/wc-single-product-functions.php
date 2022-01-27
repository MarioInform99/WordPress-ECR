<?php
/**
 * WooCommerce single product hooks.
 *
 * @package Webion
 */

add_action( 'woocommerce_before_single_product_summary', 'webion_single_product_row_open', 1 );
add_action( 'woocommerce_after_single_product_summary', 'webion_single_product_row_close', 10 );

add_action( 'woocommerce_before_single_product_summary', 'webion_single_product_images_column_open', 1 );
add_action( 'woocommerce_before_single_product_summary', 'webion_single_product_images_column_close', 30 );

add_action( 'woocommerce_before_single_product_summary', 'webion_single_product_content_column_open', 40 );
add_action( 'woocommerce_after_single_product_summary', 'webion_single_product_content_column_close', 10 );
add_filter( 'woocommerce_product_thumbnails_columns', 'webion_wc_product_thumbnails_columns' );

// Product Meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'webion_woo_template_single_meta', 2 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

add_action( 'woocommerce_single_product_summary', 'webion_single_product_price_open', 9 );
add_action( 'woocommerce_single_product_summary', 'webion_single_product_price_close', 15 );

// Hide Tab Heading
add_filter( 'woocommerce_product_description_heading', '__return_null' );

// Thumbnail
add_filter( 'woocommerce_gallery_image_size', function( $size ) {
	return 'webion-thumb-product-single';
} );

if ( ! function_exists( 'webion_single_product_price_open' ) ) {

	/**
	 * Content single product price wrap open
	 */
	function webion_single_product_price_open() {
		echo '<div class="product-price">';
	}

}

if ( ! function_exists( 'webion_single_product_price_close' ) ) {

	/**
	 * Content single product price wrap close
	 */
	function webion_single_product_price_close() {
		echo '</div>';
	}

}

if ( ! function_exists( 'webion_single_product_row_open' ) ) {

	/**
	 * Content single product row open
	 */
	function webion_single_product_row_open() {
		echo '<div class="row">';
	}

}

if ( ! function_exists( 'webion_single_product_row_close' ) ) {

	/**
	 * Content single product row open
	 */
	function webion_single_product_row_close() {
		echo '</div>';
	}

}

if ( ! function_exists( 'webion_single_product_images_column_open' ) ) {

	/**
	 * Content single product images column open
	 */
	function webion_single_product_images_column_open() {
		echo '<div class="col-xs-12 col-md-6">';
	}

}

if ( ! function_exists( 'webion_single_product_images_column_close' ) ) {

	/**
	 * Content single product images column close
	 */
	function webion_single_product_images_column_close() {
		echo '</div>';
	}

}

if ( ! function_exists( 'webion_single_product_content_column_open' ) ) {

	/**
	 * Content single product content column open
	 */
	function webion_single_product_content_column_open() {
		echo '<div class="col-xs-12 col-md-6 product-summary__wrap">';
	}

}

if ( ! function_exists( 'webion_single_product_content_column_close' ) ) {

	/**
	 * Content single product content column close
	 */
	function webion_single_product_content_column_close() {
		echo '</div>';
	}

}

if ( ! function_exists( 'webion_wc_product_thumbnails_columns' ) ) {

	/**
	 * Return product thumbnails count
	 *
	 * @return int
	 */
	function webion_wc_product_thumbnails_columns(){
		return 6;
	}

}


if ( ! function_exists( 'webion_woo_template_single_meta' ) ) {

	/**
	 * Output the product meta.
	 *
	 * @return int
	 */
	function webion_woo_template_single_meta(){
		global $product;
		?>
		
		<div class="product_meta">

			<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

				<div class="sku_wrapper"><?php esc_html_e( 'SKU:', 'webion' ); ?> <span class="sku"><?php echo esc_html( ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'webion' ) ); ?></span></div>

			<?php endif; ?>

			<?php do_action( 'woocommerce_product_meta_start' ); ?>

			<?php echo wc_get_product_tag_list( $product->get_id(), ' ', '<div class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'webion' ) . ' ', '</div>' ); ?>

			<?php echo wc_get_product_category_list( $product->get_id(), ' ', '<div class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'webion' ) . ' ', '</div>' ); ?>

			<?php do_action( 'woocommerce_product_meta_end' ); ?>

		</div><?php
	}

}