<?php
/**
 * Class to create a Customizer control for displaying information
 *
 * @author   WooThemes
 * @package  bonbeno
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The 'more' bonbeno control class
 */
class More_bonbeno_Control extends WP_Customize_Control {

	/**
	 * Render the content on the theme customizer page
	 */
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">

			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

			<p>
				<?php printf( esc_html__( 'There\'s a range of %s extensions available to put additional power in your hands. Check out the %s%s%s page in your dashboard for more information.', 'bonbeno' ), 'bonbeno', '<a href="' . esc_url( admin_url() . 'themes.php?page=bonbeno-welcome' ) .'">', 'bonbeno', '</a>' ); ?>
			</p>

			<span class="customize-control-title"><?php printf( esc_html__( 'Enjoying %s?', 'bonbeno' ), 'bonbeno' ); ?></span>

			<p>
				<?php printf( esc_html__( 'Why not leave us a review on %sWordPress.org%s?  We\'d really appreciate it!', 'bonbeno' ), '<a href="https://wordpress.org/themes/bonbeno">', '</a>' ); ?>
			</p>

		</label>
		<?php
	}
}
