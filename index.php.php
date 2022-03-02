<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bonbeno
 */

get_header(); ?>

<div class="row" style="height: 100px; width: 100%; background-color: blue;">
	
</div>

<!-- NASLOV SA REKLAMAMA -->
<div class="row menuSaReklamama" style="margin-bottom: 20px;">

	<!-- LIJEVI PRAZNI DIO -->
		<div class="col-xl-1 hidden-md hidden-sm hidden-xs">
			
		</div>

	<!-- MENU SA ARTIKLIMA -->
		<div class="col-xl-2 hidden-md hidden-sm hidden-xs border">
			<?php 
						wp_nav_menu(
							array(
								'theme_location'	=> 'productsMenu',
								'container_class'	=> 'productsMenu-navigation',
								)
						);
				?>
		</div>

	<!-- PROSTOR SA REKLAMAMA -->

		<div class="col-xl-5 col-md-10 col-sm-10 col-xs-12 reklameL" >
		<!--	<img src="/wp-content/uploads/2018/06/landscape-1516402924-labrador-retriever-puppies.jpg" alt="Smiley face" class="img-responsive"> -->
		</div>
		<div class="col-xl-3 col-md-2 col-sm-2 hidden-xs reklameD" style="padding: 0px;">
			<div class="reklameDG border-0"> 
			</div>
			<div class="reklameDD border-0"> 
			</div>
		</div>

	<!-- DESNI PRAZNI DIO -->
		<div class="col-xl-1 hidden-md hidden-sm hidden-xs"></div>
</div>
<!-- KRAJ NASLOVA SA REKLAMAMA -->

<!-- SADRŽAJ NASLOVNE STRANICE -->

	<!-- SUPER SALE REKLAMA -->
		<div class="row super-sale hidden-xs">
			<div class="col-xl-1 col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-xl-10 col-md-10 col-sm-12 super-sale-border" style="text-align: center;">
				<h1 style="font-size: 2.5vw;">SUPER SALE UP TO <b class="orrange-font">30%</b> OFF SOME ITEMS!<b class="orrange-font"> HURRY UP!</b></h1>
			</div>
			<div class="col-xl-1 col-md-1 hidden-sm hidden-xs"></div>
		</div>
	<!-- KRAJ - SUPER SALE REKLAME -->
<div class="row" style="height: 100px; width: 100%; background-color: red;">
	
</div>
	<!-- ABOUT US -->
		<div class="row aboutUs">
			<div class="col-md-1 hidden-xs hidden-sm"></div>
			<div class="col-md-10 col-xs-12 col-sm-12 aboutUs-border">
				<div class="col"><img src="/wp-content/themes/bonbeno1/img/clients.png" class="aboutUs-pic">
					<p class="naslovMali"><b>700+</b> Clients Love Us!</p>
					<p class="maliText">We offer best service and great prices on high quality products.</p>
				</div>
				<div class="col"><img src="/wp-content/themes/bonbeno1/img/shipping.png" class="aboutUs-pic">
					<p class="naslovMali">Shipping <b>all over India </b></p>
					<p class="maliText">Our store operates all over India and You can enjoy in fast delivery of all orders.</p>
				</div>
				<div class="col"><img src="/wp-content/themes/bonbeno1/img/safe.png" class="aboutUs-pic">
					<p class="naslovMali"><b>100%</b> Safe Payment</p>
					<p class="maliText">Buy with confidence using the world´s most popular and secure payment methods.</p>
				</div>
				<div class="col"><img src="/wp-content/themes/bonbeno1/img/successful.png" class="aboutUs-pic">
					<p class="naslovMali"><b>2000+</b> Successful Deliveries</p>
					<p class="maliText">Our Buyer Protection covers Your purchase from click to delivery.</p>
				</div>
			</div>
			<div class="col-md-1 hidden-xs hidden-sm"></div>
			
		</div>
	<!-- KRAJ ABOUT US -->

	<!-- TOP SELLING PRODUCTS -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2 col-sm-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 style="text-align: center; font-size: 15px; margin-top: 0px; font-weight: 600;">TOP SELLING PRODUCTS</h5>
		</div>
		<div class="col-md-8 col-sm-10" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-10">
			<?php dynamic_sidebar( 'top_selling_products' ); ?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>
	<!-- KRAJ - TOP SELLING PRODUCTS -->

	<!-- BEST DEALS -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 style="text-align: center; font-size: 15px; margin-top: 0px; font-weight: 600;">BEST DEALS</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-10">
			<?php dynamic_sidebar( 'best_deals_products' ) ?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>	
	</div>
	<!-- KRAJ - BEST DEALS -->

	<!-- NEW ARRIVALS -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 style="text-align: center; font-size: 15px; margin-top: 0px; font-weight: 600;">NEW ARRIVALS</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-10">
			<?php dynamic_sidebar('new_arrivals_products')?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>
	<!-- KRAJ - NEW ARRIVALS -->

	<!-- NEW STORIES -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 style="text-align: center; font-size: 15px; margin-top: 0px; font-weight: 600;">NEW STORIES</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-10">
			<?php dynamic_sidebar( 'new_stories' ) ?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>		
	</div>
	<!-- KRAJ - NEW STORIES -->

	<!-- JOIN US ON SOCIAL MEDIA -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 style="text-align: center; font-size: 15px; margin-top: 0px; font-weight: 600;">JOIN US ON SOCIAL MEDIA</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-10">
			<?php dynamic_sidebar( 'join_us_social_media' ) ?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>
	<!-- KRAJ - JOIN US ON SOCIAL MEDIA -->

<!-- KRAJ SADRŽAJA NASLOVNE STRANICE -->

	
<?php
do_action( 'bonbeno_sidebar' );
get_footer();
