<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
																									<script type="text/javascript">
																											function incrementValue()
																											{
																											    var value = parseInt(document.getElementById('kolicina').value, 10);
																											    value = isNaN(value) ? 0 : value;
																											    if(value<10){
																											        value++;
																											            document.getElementById('kolicina').value = value;
																											    }
																											}
																											function decrementValue()
																											{
																											    var value = parseInt(document.getElementById('kolicina').value, 10);
																											    value = isNaN(value) ? 0 : value;
																											    if(value>1){
																											        value--;
																											            document.getElementById('kolicina').value = value;
																											    }

																											}
																									</script>

<div class="row divCijene">
	<div class="col-md-8"><?php echo do_shortcode("[wp-review]"); ?></div>
	<div class="col-md-4">
		<h3 class="beforePrice"><b>Price:</b></h3>
		<h2 class="price" style="margin: 0px; float: right;"><b><?php echo $product->get_price_html(); ?></b></h2>
		<br>
		<div class="shipping" style="margin-top: 25px;">
				<?php
					$shipping_class_id = $product->get_shipping_class_id();
					$shipping_class= $product->get_shipping_class();
					$fee = 50;

					if ($shipping_class_id) {
					$flat_rates = get_option("woocommerce_flat_rates");
					$fee = $flat_rates[$shipping_class]['class 1'];
					}

					$flat_rate_settings = get_option("woocommerce_flat_rate_settings");
					echo '<h3 class="beforePrice"><b>Shipping: </b></h3> <h2 class="price" style="margin: 0px; float: right;"><b><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>' . ($flat_rate_settings['class 1'] + $fee ).'</span></b></h2>';
				?>
		</div>

		<div class="quantity" style="margin-top: 25px; float: left; width: 100%;">
			<label class="screen-reader-text"  for="<?php echo esc_attr( $input_id ); ?>"><h3 style="margin: 0px; float: left;"><b><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></b></h3></label>


<div style="float: right;">
<input class="btn btn-default" type="button" onclick="decrementValue()" value="-" style="float: right; border-radius: 0px; color:black; background-color: #e1e1e1; height: 100%;" />
			<input

				type="number"
				id="kolicina"
				class="input-text qty text form-control"
				step="<?php echo esc_attr( $step ); ?>"
				min="<?php echo esc_attr( $min_value ); ?>"
				max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
				name="<?php echo esc_attr( $input_name ); ?>"
				value="1"
				title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
				size="4"
				pattern="<?php echo esc_attr( $pattern ); ?>"
				inputmode="<?php echo esc_attr( $inputmode ); ?>"
				aria-labelledby="<?php echo esc_attr( $labelledby ); ?>"
				style="margin: 0px; float: right; border-radius: 0px; height: 100%; border:0px;"/>

<input class="btn btn-default" type="button" onclick="incrementValue()" value="+" style="float: right; border-radius: 0px; color:black; background-color: #e1e1e1; height: 100%;" />
</div>	

		</div>
	</div>

</div>

<!-- ubaceno shipping -->
