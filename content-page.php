<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package bonbeno
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to bonbeno_page add_action
	 *
	 * @hooked bonbeno_page_header          - 10
	 * @hooked bonbeno_page_content         - 20
	 */
	do_action( 'bonbeno_page' );
	?>
</article><!-- #post-## -->
