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

	
</div>

<!-- NASLOV SA REKLAMAMA -->
<div class="row menuSaReklamama" style="margin-bottom: 20px;">

	<!-- LIJEVI PRAZNI DIO -->
		<div class="col-xl-1 hidden-md hidden-sm hidden-xs">
			
		</div>

	<!-- MENU SA ARTIKLIMA -->
		<div class="col-xl-2 hidden-md hidden-sm hidden-xs border" style="padding-top: 25px;">
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

		<div class="col-xl-5 col-md-10 col-sm-10 col-xs-12 reklameL border-0"  >
		<!--	<img src="/wp-content/uploads/2018/06/landscape-1516402924-labrador-retriever-puppies.jpg" alt="Smiley face" class="img-responsive"> -->
		<div style="width: 100%; height: 100%;">
		<?php echo do_shortcode('[smartslider3 slider=2]');?>
		</div>
		</div>
		<div class="col-xl-3 col-md-2 col-sm-2 hidden-xs reklameD" style="padding: 0px;">
			<div class="reklameDG border-0"> 
				<?php echo do_shortcode('[smartslider3 slider=1]');?>
			</div>
			<div class="reklameDD border-0"> 
				<?php echo do_shortcode('[smartslider3 slider=3]');?>
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
			<div class="col-xl-10 col-md-10 col-sm-12 super-sale-border">
				<h1>SUPER SALE UP TO <b class="orrange-font">30%</b> OFF SOME ITEMS!<b class="orrange-font"> HURRY UP!</b></h1>
			</div>
			<div class="col-xl-1 col-md-1 hidden-sm hidden-xs"></div>
		</div>
	<!-- KRAJ - SUPER SALE REKLAME -->

	<!-- ABOUT US -->

	<div class="row">
		
	</div>
		<div class="row aboutUs">
			<div class="col-md-1 hidden-xs hidden-sm"></div>
			<div class="col-md-10 col-xs-12 col-sm-12 aboutUs-border">
				<div class="col colL"><img src="/wp-content/themes/bonbeno1/img/clients.png" class="aboutUs-pic">
					<p class="naslovMali"><b>700+</b> Clients Love Us!</p>
					<p class="maliText">We offer best service and great prices on high quality products.</p>
				</div>
				<div class="col colL"><img src="/wp-content/themes/bonbeno1/img/shipping.png" class="aboutUs-pic">
					<p class="naslovMali">Shipping <b>all over India </b></p>
					<p class="maliText">Our store operates all over India and You can enjoy in fast delivery of all orders.</p>
				</div>
				<div class="col colD"><img src="/wp-content/themes/bonbeno1/img/safe.png" class="aboutUs-pic">
					<p class="naslovMali"><b>100%</b> Safe Payment</p>
					<p class="maliText">Buy with confidence using the world´s most popular and secure payment methods.</p>
				</div>
				<div class="col colD"><img src="/wp-content/themes/bonbeno1/img/successful.png" class="aboutUs-pic">
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
			<h5 class="naslovni-text">TOP SELLING PRODUCTS</h5>
		</div>
		<div class="col-md-8 col-sm-10" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row" style="padding-top: 15px; padding-bottom: 15px;">

		<div class="col-md-1 hidden-xs hidden-sm"></div>

		<!-- LIJEVA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi tsp-l-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi">
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-l-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-l-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-l-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<!-- DESNA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi tsp-d-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi" >
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-d-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-d-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi tsp-d-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<div class="col-md-1 hidden-xs hidden-sm"></div>	
	</div>
	<!-- KRAJ - TOP SELLING PRODUCTS -->

	<!-- BEST DEALS -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 class="naslovni-text">BEST DEALS</h5>

		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		
		<!-- LIJEVA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi bd-l-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi">
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-l-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-l-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-l-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<!-- DESNA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi bd-d-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi" >
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-d-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-d-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi bd-d-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<div class="col-md-1 hidden-xs hidden-sm"></div>	
	</div>
	<!-- KRAJ - BEST DEALS -->

	<!-- NEW ARRIVALS -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>

		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 class="naslovni-text">NEW ARRIVALS</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		
		<!-- LIJEVA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi na-l-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi">
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-l-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-l-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-l-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<!-- DESNA STRANA -->
		<div class="col-md-2 velikiProizvodi">
			<a href="/product.php">
				<div class="slika-velikiProizvodi na-d-v-1">	
				</div>
			</a>
			<div>
			<p class="text-velikiProizvodi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<img class="img-responsive zvjezdice-velikiProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
			<h3 class="cijena-velikiProizvodi"><b>₹ 250,00</b></h3>
			</div>
		</div>
		<div class="col-md-3 kolona-maliProizvodi" >
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-d-m-1">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-d-m-2">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\4star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>
			<div class="maliProizvodi">
				<a href="#">
					<div class="slika-maliProizvodi na-d-m-3">
					</div>
				</a>
				<div class="opis-maliProizvodi">
					<p class="text-maliProizvod">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<img class="img-responsive zvjezdice-maliProizvodi" src="/wp-content\themes\bonbeno1\img\5star.png">
					<h3 class="cijena-maliProizvodi"><b>₹ 250,00</b></h3>
				</div>
			</div>	
		</div>

		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>
	<!-- KRAJ - NEW ARRIVALS -->

	<!-- NEW STORIES -->
	<div class="row">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 class="naslovni-text">NEW STORIES</h5>
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
	</div>

	<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
		<div class="col-md-1 hidden-xs hidden-sm"></div>
			<?php 
            $args_latest = array(           
            'post_type' => 'post',
            'ignore_sticky_posts' => 1,
            'posts_per_page' => 5       
        	);

            $the_query = new WP_Query($args_latest); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="col-md-2 clanak">
            <article>
            <a href="<?php the_permalink() ?>">
            	<div class="slika-vijesti">
	            <?php the_post_thumbnail();?>
	            </div>
	            <h3><?php the_title(); ?></h3>
        	</a>
            <p><?php echo substr(strip_tags($post->post_content), 0, 100);?></p>
            <!-- <?php the_content( 'Read the full post »' ); ?>-->
            </article>
        </div>
            <?php endwhile;?>
        

			<?php wp_reset_query();?>
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>		
	</div>
	<!-- KRAJ - NEW STORIES -->

	<!-- JOIN US ON SOCIAL MEDIA -->
	<div class="row">
		<div class="col-md-2" style="padding: 0px;">
			<hr class="hLinija1" style="border-top: 10px solid #ff3f00; width: 100%; float: left; margin-bottom: 2px;">
			<h5 class="naslovni-text">JOIN US ON SOCIAL MEDIA</h5>
		</div>
		<div class="col-md-9" style="padding: 0px;">
			<hr class="hLinija2" style="border-top: 1px solid #ff3f00; width: 100%; float: left;">
		</div>
		<div class="col-md-1 hidden-xs hidden-sm"></div>
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

<!-- KRAJ SADRŽAJA NASLOVNE STRANICE -->

	
<?php
do_action( 'bonbeno_sidebar' );
get_footer();
