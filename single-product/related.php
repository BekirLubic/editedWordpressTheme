<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

				<section class="related products" style="width: 100%;">

					<div class="col-md-3" style="padding: 0px;">
						<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
						<h5 class="naslovni-text"><?php esc_html_e( 'SIMILAR PRODUCTS', 'woocommerce' ); ?></h5>

					</div>
					<div class="col-md-9" style="padding: 0px;">
						<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
					</div>

					<?php woocommerce_product_loop_start(); ?>

						<?php foreach ( $related_products as $related_product ) : ?>

							<?php
							 	$post_object = get_post( $related_product->get_id() );

								setup_postdata( $GLOBALS['post'] =& $post_object );

								wc_get_template_part( 'content', 'product' );

								 ?>

								 
						<?php endforeach; ?>

					<?php woocommerce_product_loop_end(); ?>
					
				</section>



	<!-- JOIN US ON SOCIAL MEDIA -->
		<div class="row">
			<div class="col-md-3" style="padding: 0px;">
				<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
				<h5 class="naslovni-text">JOIN US ON SOCIAL MEDIA</h5>
			</div>
			<div class="col-md-9" style="padding: 0px;">
				<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
			</div>
			
		</div>

		<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
			<div class="col-md-1 hidden-xs hidden-sm"></div>
			<div class="col-md-3">
				<?php echo do_shortcode('[instagram-feed num=10 cols=5 width=100%]');?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('join_us_social_media') ?>
			</div>
			<div class="col-md-3">
				<a class="twitter-timeline" href="https://twitter.com/coronamortis2?ref_src=twsrc%5Etfw">Tweets by coronamortis2</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-1 hidden-xs hidden-sm"></div>
		</div>
	<!-- KRAJ - JOIN US ON SOCIAL MEDIA -->


<?php endif;

wp_reset_postdata();
