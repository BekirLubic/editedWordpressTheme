<?php
/**
 * Bonbeno engine room
 *
 * @package bonbeno
 */

/**
 * Assign the Bonbeno version to a var
 */
$theme              = wp_get_theme( 'bonbeno' );
$bonbeno_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$bonbeno = (object) array(
	'version' => $bonbeno_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-bonbeno.php',
	'customizer' => require 'inc/customizer/class-bonbeno-customizer.php',
);

require 'inc/bonbeno-functions.php';
require 'inc/bonbeno-template-hooks.php';
require 'inc/bonbeno-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$bonbeno->jetpack = require 'inc/jetpack/class-bonbeno-jetpack.php';
}

if ( bonbeno_is_woocommerce_activated() ) {
	$bonbeno->woocommerce = require 'inc/woocommerce/class-bonbeno-woocommerce.php';

	require 'inc/woocommerce/bonbeno-woocommerce-template-hooks.php';
	require 'inc/woocommerce/bonbeno-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$bonbeno->admin = require 'inc/admin/class-bonbeno-admin.php';

	require 'inc/admin/class-bonbeno-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-bonbeno-nux-admin.php';
	require 'inc/nux/class-bonbeno-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-bonbeno-nux-starter-content.php';
	}
}


/**
 * Change number of related products output --- dodao naknadno za woocommerce broj postova...
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 5;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 5; // 4 related products
	$args['columns'] = 5; // arranged in 2 columns
	return $args;
}

/** 
* Dodana izmjena za button "add to card" u "view product" u simple product page 
*/


add_filter( 'woocommerce_loop_add_to_cart_link', 'replace_loop_add_to_cart_button', 30, 2 );
function replace_loop_add_to_cart_button( $button, $product  ) {
    if( $product->is_type( 'simple' ) ){
        $button_text = __( "View product", "woocommerce" );
        $button = '<a class="button btn btn-default view-product-button" style="border: 1px solid #f66d48; color: #f66d48;" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
    }

    return $button;
}



add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 5);


