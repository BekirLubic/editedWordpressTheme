<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bonbeno
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'bonbeno_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to bonbeno_page_after action
				 *
				 * @hooked bonbeno_display_comments - 10
				 */
				do_action( 'bonbeno_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<style type="text/css"> 
.woocommerce .thumbnails .owl-nav .owl-prev, .woocommerce .thumbnails .owl-nav .owl-next{
	background: none !important;
}

</style>

<!-- SKRIPTA ZA RAD GALERIJE galery -->
	<script type="text/javascript">
		jQuery(".entry-content .gallery").addClass( 'owl-carousel owl-theme');
		jQuery(".entry-content .gallery").owlCarousel( {
        items                   : 1,
        singleItem              : true,
        autoHeight              : true

		} );
	</script>

<?php
do_action( 'bonbeno_sidebar' );
get_footer();
