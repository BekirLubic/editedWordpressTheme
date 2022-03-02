<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bonbeno
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>Bonbeno shop</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/theme/bonbeno1/assets/css/admin/base/icons.css">

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="row" id="mainHeader" style="background-color: #cccccc;">
		<div class="col-md-1"></div>
		<div class="col-md-7 naslov">
			<a href= "<?php echo home_url( $path, $scheme );?>" style="color: #868686;" >
				<span class="glyphicon glyphicon-home" aria-hidden="true" style="float: left; vertical-align: center; margin-top: 5px; margin-right: 15px;"></span>
			</a>
			
			<div style="float: left;">	<?php wp_nav_menu(array('theme_location' => 'topHeader'));?>	</div>
		</div>
		<div class="col-md-3" style="padding-right: 0px;">
			<div style="padding:6px 0px;">
			<p style="float: right; font-size: 12px; font-family: sans-serif; color: #858585; letter-spacing: 2px; margin: 0px;">+91 97115 55555</p>
			<span class="glyphicon glyphicon-earphone" aria-hidden="true" style="float: right; vertical-align: center; margin-right: 7px; margin-left: 20px; color: #858585;">
			</span>
			<p style="float: right; font-size: 12px; font-family: sans-serif; color: #858585; letter-spacing: 2px; margin: 0px;">mail@mail.com</p>
			<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="float: right; vertical-align: center; margin-right: 7px; color: #858585;">
			</span>	
			</div>		
		</div>
		<div class="col-md-1"></div>
		
	</div>

<?php do_action( 'bonbeno_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'bonbeno_before_header' ); ?>

	<header class="site-header masthead" role="banner" style="<?php bonbeno_header_styles(); ?>">


		<?php
		/**
		 * Functions hooked into bonbeno_header action
		 *
		 * @hooked bonbeno_header_container                 - 0
		 * @hooked bonbeno_skip_links                       - 5
		 * @hooked bonbeno_social_icons                     - 10
		 * @hooked bonbeno_site_branding                    - 20
		 * @hooked bonbeno_secondary_navigation             - 30
		 * @hooked bonbeno_product_search                   - 40
		 * @hooked bonbeno_header_container_close           - 41
		 * @hooked bonbeno_primary_navigation_wrapper       - 42
		 * @hooked bonbeno_primary_navigation               - 50
		 * @hooked bonbeno_header_cart                      - 60
		 * @hooked bonbeno_primary_navigation_wrapper_close - 68
		 */
		do_action( 'bonbeno_header' ); ?>



	</header><!-- #masthead -->

	


	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

<div class="row prebaceno">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-1 col-xs-3" style="padding-right: 0px; padding-left: 0px;">
			<div class="dropdown float-left" style="border-left: 1px solid #cbcbcb; border-right: 1px solid #cbcbcb; height: 100%; padding: 10px 0px;">
			  <button class="btn btn-default btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <span class="glyphicon glyphicon-align-justify"></span>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <?php 
						wp_nav_menu(
							array(
								'theme_location'	=> 'productsMenu',
								'container_class'	=> 'productsMenu-navigation',
								)
						);
				?>
			  </div>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'bonbeno' ); ?>">
					<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'bonbeno_menu_toggle_text', __( 'Menu', 'bonbeno' ) ) ); ?></span></button>
						

						 
			</nav><!-- #site-navigation -->

		</div>
		<div class="site-branding col-md-2 col-xs-4" style="padding: 10px 0px;"">
			<?php bonbeno_site_title_or_logo(); ?>

		</div>
		<div class="col-md-1 hidden-xs hidden-sm">
			
		</div>

		<!-- Search dodana naknadno iz bonbeno-woocommerce-template-functions.php red-88 nakon  if ( bonbeno_is_woocommerce_activated() ) { ?>-->
		<div class="site-search col-md-3 hidden-xs hidden-sm" style="margin-top: 8px; padding: 10px 0px;" >

			<!-- UKINUTO RADI SLJEDECEG KOJEG JE LAKSE MODIFIKOVATI -->
				<!-- <?php /** the_widget( 'WC_Widget_Product_Search', 'title=' ); */ ?> -->
				<?php get_product_search_form(); ?> <!-- veza sa product-searchform.php -->
		</div>
		<div class="col-md-2 hidden-xs hidden-sm"></div>

		<!-- Kartica dodana naknadno iz bonbeno-woocommerce-template-functions.php red-73 nakon  function bonbeno_cart_link() {--> 
		<div class="col-md-1 col-xs-3" style="float: left; padding: 10px 0px;" title="<?php esc_attr_e( 'View your shopping cart', 'bonbeno' ); ?>">
			<a class="btn btn-danger btn-md" style="background-color: #ff7041; border-color: #ff7041;" href="<?php echo esc_url( wc_get_cart_url() ); ?>" role="button">
				<span class="glyphicon glyphicon-shopping-cart"></span>  <?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'bonbeno' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm">
			
		</div>
</div>

<div class="row hidden-md hidden-lg hidden-sm">
	<div class="col-xs-12"> 

		<div class="site-searchs">

			<!-- UKINUTO RADI SLJEDECEG KOJEG JE LAKSE MODIFIKOVATI -->
				<!-- <?php /** the_widget( 'WC_Widget_Product_Search', 'title=' ); */ ?> -->
				<?php get_product_search_form(); ?>  <!-- veza sa product-searchform.php -->
		</div>

	</div>
	
</div>

<div class="row">
	<div class="col-md-1 hidden-xs hidden-sm"></div>
	<div class="col-md-3 hidden-xs hidden-sm">
		<?php
	/**
	 * Functions hooked in to bonbeno_before_content
	 *
	 * @hooked bonbeno_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'bonbeno_before_content' ); 
	?>
	</div>
	<div class="col-md-8 hidden-xs "></div>	

</div>


		<?php
		do_action( 'bonbeno_content_top' );
