<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<!--

<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" onchange="this.form.submit()">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>

-->


<!-- UBACENI LINKOVI ZA SORTIRANJE!!! -->

<div class="sortiranjeDiv">
	<p style="margin:8px 5px 0px 0px; font-weight: 700; font-family: sans-serif; font-size: 19px; color: black;">Sort by</p>
</div>
<div class="sortiranjeDiv">
<a class="sortiranjeA" href="?orderby=popularity"> 
	<p class="sortiranjeP">Popularity</p> <span class="glyphicon glyphicon-sort-by-attributes-alt sortiranjeSpan" aria-hidden="true"></span> 
</a>
</div>
<div class="sortiranjeDiv" style="float: left; margin-right: 10px;">
<a class="sortiranjeA" href="?orderby=date"> 
	<p class="sortiranjeP">Newest</p> <span class="glyphicon glyphicon-sort-by-attributes-alt sortiranjeSpan" aria-hidden="true"></span>
</a>
</div>
<div class="sortiranjeDiv" style="float: left; margin-right: 10px;">
<a class="sortiranjeA" href="?orderby=price-desc"> 
	<p class="sortiranjeP">Price</p> <span class="glyphicon glyphicon-sort-by-attributes sortiranjeSpan" aria-hidden="true"></span>
</a>
</div>
<div class="sortiranjeDiv" style="float: left; margin-right: 10px; ">
<a class="sortiranjeA" href="?orderby=price"> 
	<p class="sortiranjeP">Discount</p> <span class="glyphicon glyphicon-sort-by-attributes-alt sortiranjeSpan" aria-hidden="true"></span>
</a>
</div>
