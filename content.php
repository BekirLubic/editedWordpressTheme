<?php
/**
 * Template used to display post content.
 *
 * @package bonbeno
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Functions hooked in to bonbeno_loop_post action.
	 *
	 * @hooked sbonbeno_post_header          - 10
	 * @hooked bonbeno_post_meta            - 20
	 * @hooked bonbeno_post_content         - 30
	 */
	do_action( 'bonbeno_loop_post' );
	?>

</article><!-- #post-## -->
