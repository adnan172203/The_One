<?php
// Change number or products per row to 3
add_filter('loop_shop_columns', 'theone_loop_columns');
if (!function_exists('theone_loop_columns')) {
	function theone_loop_columns() {
		return 3; // 3 products per row
	}
}
/**
 * WooCommerce search form
 */
add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );
 
function woo_custom_product_searchform( $form ) {
 
    $form = '<form role="search" method="get" class="search-bar" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
			<label class="screen-reader-text" for="s">' . __( 'Search for:', 'theone' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search Product', 'theone' ) . '" /><i class="fa fa-search"></i>
			<input type="hidden" name="post_type" value="product" />
	</form>';
    return $form;
 
}

/**
 * WooCommerce mini cart dropdown
 */

function theone_wc_cart_dropdown() { ?>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="item-counter"><?php echo WC()->cart->cart_contents_count; ?></span></span></a>
    <div class="dropdown-menu cart-sub-menu woocommerce">  
    	<div class="header-mini-cart woocommerce">
	    <?php 
	    echo wc_get_template( 'cart/mini-cart.php' );
	    ?>
	    </div>
	</div>
    <?php
}
/**
 * WooCommerce update mini cart on ajax click
 */
add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

    ob_start();
    ?>

    <div class="header-mini-cart woocommerce">
        <?php woocommerce_mini_cart(); ?>
    </div>

    <?php $fragments['div.header-mini-cart'] = ob_get_clean();

    return $fragments;

} );

// Ensure cart contents update when products are added to the cart via AJAX
add_filter( 'woocommerce_add_to_cart_fragments', 'theone_woocommerce_header_add_to_cart_fragment' );
function theone_woocommerce_header_add_to_cart_fragment($fragments){
    ob_start();
    ?>
    <span class="item-counter">
        <?php echo WC()->cart->cart_contents_count; ?>
    </span>
    <?php

    $fragments['span.item-counter'] = ob_get_clean();

    return $fragments;
}
/**
 * Remove from wooCommerce
 *
 */

/**
 * Remove woocommerce_breadcrumb
 */
function theone_remove_woocommerce_breadcrumb() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}
add_action( 'init', 'theone_remove_woocommerce_breadcrumb' );

/**
 * Remove woocommerce_output_content_wrapper
 */
function theone_remove_woocommerce_output_content_wrapper() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
}
add_action( 'init', 'theone_remove_woocommerce_output_content_wrapper' );

/**
 * Remove woocommerce_catalog_ordering
 */
function theone_remove_woocommerce_catalog_ordering() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
add_action( 'init', 'theone_remove_woocommerce_catalog_ordering' );

/**
 * Remove woocommerce_template_loop_rating
 */
function theone_remove_woocommerce_template_loop_rating() {
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
}
add_action( 'init', 'theone_remove_woocommerce_template_loop_rating' );

/**
 * Remove woocommerce_template_loop_price
 */
function theone_remove_woocommerce_template_loop_price() {
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
}
add_action( 'init', 'theone_remove_woocommerce_template_loop_price' );

/**
 * Remove woocommerce_template_loop_add_to_cart
 */
function theone_remove_woocommerce_template_loop_add_to_cart() {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'init', 'theone_remove_woocommerce_template_loop_add_to_cart' );

/**
 * Remove woocommerce_output_related_products
 */
function theone_remove_woocommerce_output_related_products() {
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}
add_action( 'init', 'theone_remove_woocommerce_output_related_products' );


