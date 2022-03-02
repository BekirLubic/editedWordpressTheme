<?php
/**
 * Template used to display post content on single pages.
 *
 * @package bonbeno
 */

?>

<h1>this is test</h1>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'bonbeno_single_post_top' );

	/**
	 * Functions hooked into bonbeno_single_post add_action
	 *
	 * @hooked bonbeno_post_header          - 10
	 * @hooked bonbeno_post_meta            - 20
	 * @hooked bonbeno_post_content         - 30
	 */
	do_action( 'bonbeno_single_post' );

	/**
	 * Functions hooked in to bonbeno_single_post_bottom action
	 *
	 * @hooked bonbeno_post_nav         - 10
	 * @hooked bonbeno_display_comments - 20
	 */
	do_action( 'bonbeno_single_post_bottom' );
	?>

</article><!-- #post-## -->
