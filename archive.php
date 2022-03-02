<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bonbeno
 */

get_header(); ?>


dsadasdsa
<div class="row" style="height: 100px; width: 100%; background-color: blue;"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'bonbeno_sidebar' );
get_footer();
