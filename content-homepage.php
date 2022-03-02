<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package bonbeno
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php bonbeno_homepage_content_styles(); ?>" data-featured-image="<?php echo $featured_image; ?>">
	<div class="col-ful">
		<?php
		/**
		 * Functions hooked in to bonbeno_page add_action
		 *
		 * @hooked bonbeno_homepage_header      - 10
		 * @hooked bonbeno_page_content         - 20
		 */
		do_action( 'bonbeno_homepage' );
		?>
	</div>
</div><!-- #post-## -->


<div class="row" style="height: 100px; width: 100%; background-color: blue;"></div>
sdfsdfsfsd