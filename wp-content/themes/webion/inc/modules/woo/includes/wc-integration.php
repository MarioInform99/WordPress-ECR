<?php
/**
 * Extends basic functionality for better WooCommerce compatibility
 *
 * @package Webion
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function webion_wc_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'webion_wc_setup' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 *
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function webion_wc_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}

add_filter( 'body_class', 'webion_wc_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 *
 * @return array $args related products args.
 */
function webion_wc_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'webion_wc_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'webion_wc_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function webion_wc_wrapper_before() {
		?>
			<div <?php webion_get_single_product_container_classes() ?>>
				
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) && !is_singular( 'product' ) ) : ?>
					<header class="page-header row">
						<h1 class="page-title h2-style col-md-12"><?php woocommerce_page_title(); ?></h1>
						<div class="archive-description col-xs-12 col-md-8 col-md-push-2"><?php esc_html( do_action('woocommerce_archive_description') ); ?></div>
					</header>
				<?php endif; ?>

			<div class="row">
			<div id="primary" <?php webion_primary_content_class(); ?>>
			<main id="main" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'webion_wc_wrapper_before' );

/**
 * Single product layout classes.
 */
if ( ! function_exists( 'webion_get_single_product_container_classes' ) ) {
	function webion_get_single_product_container_classes( $classes = null, $fullwidth = false ) {
		
		if ( $classes ) {
			$classes .= ' ';
		}
		
		$classes .= 'site-content__wrap ';
			
		echo 'class="' . apply_filters( 'webion-theme/site-content/content-classes', $classes ) . '"';
	}
}

if ( ! function_exists( 'webion_wc_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
function webion_wc_wrapper_after() {
	?>
	</main><!-- #main -->
	</div><!-- #primary -->
	<?php
}
}
add_action( 'woocommerce_after_main_content', 'webion_wc_wrapper_after' );


if ( ! function_exists( 'webion_wc_sidebar_after' ) ) {
	/**
	 * Close tags after sidebar
	 */
	function webion_wc_sidebar_after() {
		?>
			</div>
			</div>
		<?php
	}
}
add_action( 'woocommerce_sidebar', 'webion_wc_sidebar_after', 99 );

if ( ! function_exists( 'webion_wc_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 *
	 * @return array Fragments to refresh via AJAX.
	 */
	function webion_wc_cart_link_fragment( $fragments ) {
		ob_start();
		webion_wc_cart_link();
		$fragments['a.header-cart__link'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'add_to_cart_fragments', 'webion_wc_cart_link_fragment' );

if ( ! function_exists( 'webion_wc_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function webion_wc_cart_link() {
		?>
			<a class="header-cart__link" href="#" title="<?php esc_attr_e( 'View your shopping cart', 'webion' ); ?>">
		  <?php
		  $item_count_text = sprintf(
		  /* translators: number of items in the mini cart. */
			  esc_html__( '%d', 'webion' ),
			  WC()->cart->get_cart_contents_count()
		  );

		  ?>
				<?php echo webion_get_icon_svg( 'cart' ); ?>
				<span class="header-cart__link-count"><b><?php echo esc_html__( 'Bag', 'webion' ) . ':</b>' . esc_html( $item_count_text ); ?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'webion_wc_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function webion_wc_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
			<div class="header-cart">
				<div class="header-cart__link-wrap <?php echo esc_attr( $class ); ?>">
			<?php webion_wc_cart_link(); ?>
				</div>
				<div class="header-cart__content">
			<?php
			$instance = array( 'title' => esc_html__( 'My cart', 'webion' ) );
			the_widget( 'WC_Widget_Cart', $instance );
			?>
				</div>
			</div>
		<?php
	}
}

if ( ! function_exists( 'webion_wc_pagination' ) ) {

	/**
	 * WooCommerce pagination
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	function webion_wc_pagination( $args ) {
		$args['prev_text'] = sprintf( '
		<span class="nav-icon icon-prev"></span><span>%1$s</span>',
			'' );

		$args['next_text'] = sprintf( '
		<span>%1$s</span><span class="nav-icon icon-next"></span>',
			'' );

		return $args;
	}

}
add_filter( 'woocommerce_pagination_args', 'webion_wc_pagination' );

if ( ! function_exists( 'webion_init_wc_properties' ) ) {

	/**
	 * Init shop properties
	 */
	function webion_init_wc_properties() {

		// Sidebar properties for archive product
		if ( ( is_shop() || is_product_taxonomy() ) && ! is_singular( 'product' ) ) {
			if ( is_active_sidebar( 'sidebar-shop' ) ) {
				webion_theme()->sidebar_position = 'one-left-sidebar';
			} else {
				webion_theme()->sidebar_position = 'none';
			}
		}

	}

}
add_action( 'wp_head', 'webion_init_wc_properties', 2 );

/*
 *
 * Removes products count after categories name
 * 
 */
add_filter( 'woocommerce_subcategory_count_html', 'webion_woo_remove_category_products_count' );

function webion_woo_remove_category_products_count() {
	return;
}

if ( ! function_exists( 'webion_woo_add_category_description' ) ) {

	/**
	 * WooCommerce Description for Categories List Page
	 */
	function webion_woo_add_category_description ($category) {
		
		$cat_id 		= $category->term_id;
		$prod_term 		= get_term( $cat_id,'product_cat' );
		$description 	= $prod_term->description;

		if ( $category->count > 0 ) {
			$category_count = sprintf(
				'%1$s %2$s',
				esc_html( $category->count ),
				esc_html__( 'Products', 'webion' )
			);

		}


		$output = sprintf(
			'<div class="woocommerce-loop-category__description">%1$s</div><div class="entry-meta">%2$s</div>',
				esc_html( $description ),
				esc_html( $category_count )
		);

		echo wp_kses_post( $output );

	}

}
add_action( 'woocommerce_after_subcategory_title', 'webion_woo_add_category_description', 12);

if ( ! function_exists( 'webion_woo_custom_sale_text' ) ) {
	/**
	 * Remove the parentheses from the category widget.
	 */
	
	function webion_woo_custom_sale_text($text, $post, $_product) {
    	return '<span class="onsale">' . esc_html( 'Sale', 'webion' ) . '</span>';
	}
}
add_filter('woocommerce_sale_flash', 'webion_woo_custom_sale_text', 10, 3);
