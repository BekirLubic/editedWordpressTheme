<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bonbeno
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->


	<?php do_action( 'bonbeno_before_footer' ); ?>

	<div class="row prefooter">
		<!--LIJEVI PRAZNI DIO -->
			<div class="col-md-1  hidden-xs col-sm-1"></div>
		<!--NAČIN PLAĆANJA DIO -->
			<div class="col-md-3 col-xs-12 col-sm-5 placanjeKartice">
				<p class="align-middle payment">Payment Methods:</p>
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/card-Rupay.png">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/card-AE.png">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/card-mastercard.png">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/card-Visa.png">
			</div>
			<div class="col-md-2"></div>
		<!--NAČIN DOSTAVE DIO -->
			<div class="col-md-3 col-xs-12 col-sm-5 dostavaKartice">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/delivery-ups.png">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/delivery-dhl.png">
				<img class="kartice img-responsive" src="/wp-content/themes/bonbeno1/img/delivery-ems.png">
				<p class="align-middle payment">Delivery Methods:</p>
			</div>
		<!--DESNI PRAZNI DIO -->
			<div class="col-md-3 hidden-xs col-sm-1"></div>
	</div>

<footer id="colophon" class="site-footer footer" role="contentinfo">
		
		<div class="col-full row footer">
			<!-- NAVIGACIJA FOOTER -->

			<div class="col-md-1"></div>
			<div class="col-md-2 footerMenus ">
							<p class="headerFooter">COMPANY INFO</p>
				<?php wp_nav_menu(
								array(
									'theme_location'	=> 'mainFooterCompanyInfo',
									'container_class'	=> 'mainFooterCompanyInfo-navigation',
									)
							);
				?>
			</div>
			<div class="col-md-2 footerMenus">
							<p class="headerFooter">PURCHASE INFO</p>
				<?php wp_nav_menu(
								array(
									'theme_location'	=> 'mainFooterPurchaseInfo',
									'container_class'	=> 'mainFooterPurchaseInfo-navigation',
									)
							);
				?>
			</div>
			<div class="col-md-2 footerMenus">
							<p class="headerFooter">CUSTOMER SERVICE</p>
				<?php wp_nav_menu(
								array(
									'theme_location'	=> 'mainFooterCustomerService',
									'container_class'	=> 'mainFooterCustomerService-navigation',
									)
							);
				?>
			</div>
			<div class="col-md-3">
				<?php echo do_shortcode('[mc4wp_form id="156"]');?>
			</div>
			<div class="col-md-1"></div>


		</div><!-- .col-full -->

		

	</footer><!-- #colophon -->

<div class="postfooter row">
	<div class="col-md-5 col-sm-2 col-xs-1">
		
	</div>
	<div class="col-md-2 col-sm-8 col-xs-10">
		<?php
			/**
			 * Functions hooked in to bonbeno_footer action
			 *
			 * @hooked bonbeno_footer_widgets - 10
			 * @hooked bonbeno_credit         - 20
			 */
			do_action( 'bonbeno_footer' ); ?>

				<?php do_action( 'bonbeno_after_footer' ); ?>



					
	</div>
	<div class="col-md-5 col-sm-2 col-xs-1">
		
	</div>
			
		</div>


</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</body>
</html>
