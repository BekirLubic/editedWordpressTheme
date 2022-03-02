<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package bonbeno
 */

get_header(); ?>

<div class="row" style="width: 100%; height: 100px; background-color: red;"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked bonbeno_homepage_content      - 10
			 * @hooked bonbeno_product_categories    - 20
			 * @hooked bonbeno_recent_products       - 30
			 * @hooked bonbeno_featured_products     - 40
			 * @hooked bonbeno_popular_products      - 50
			 * @hooked bonbeno_on_sale_products      - 60
			 * @hooked bonbeno_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
