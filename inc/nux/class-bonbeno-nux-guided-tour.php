<?php
/**
 * Bonbeno NUX Guided Tour Class
 *
 * @author   WooThemes
 * @package  bonbeno
 * @since    2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
}

if ( ! class_exists( 'bonbeno_NUX_Guided_Tour' ) ) :

	/**
	 * The bonbeno NUX Guided Tour class
	 */
	class bonbeno_NUX_Guided_Tour {
		/**
		 * Setup class.
		 *
		 * @since 2.2.0
		 */
		public function __construct() {
			add_action( 'admin_init', array( $this, 'customizer' ) );
		}

		/**
		 * Customizer.
		 *
		 * @since 2.2.0
		 */
		public function customizer() {
			global $pagenow;

			if ( 'customize.php' === $pagenow && false === (bool) get_option( 'bonbeno_nux_guided_tour', false ) ) {
				add_action( 'customize_controls_enqueue_scripts',      array( $this, 'customize_scripts' ) );
				add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_templates' ) );

				if ( current_user_can( 'manage_options' ) ) {

					// Set Guided Tour flag so it doesn't show up again.
					update_option( 'bonbeno_nux_guided_tour', true );
				}
			}
		}

		/**
		 * Customizer enqueues.
		 *
		 * @since 2.2.0
		 */
		public function customize_scripts() {
			global $bonbeno_version;

			$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

			wp_enqueue_style( 'sp-guided-tour', get_template_directory_uri() . '/assets/css/admin/customizer/customizer.css', array(), $bonbeno_version, 'all' );

			wp_enqueue_script( 'sf-guided-tour', get_template_directory_uri() . '/assets/js/admin/customizer' . $suffix . '.js', array( 'jquery', 'wp-backbone' ), $bonbeno_version, true );

			wp_localize_script( 'sf-guided-tour', '_wpCustomizeSFGuidedTourSteps', $this->guided_tour_steps() );
		}

		/**
		 * Template for steps.
		 *
		 * @since 2.2.0
		 */
		public function print_templates() {
			?>
			<script type="text/html" id="tmpl-sf-guided-tour-step">
				<div class="sf-guided-tour-step">
					<# if ( data.title ) { #>
						<h2>{{ data.title }}</h2>
					<# } #>
					{{{ data.message }}}
					<a class="sf-nux-button" href="#">
						<# if ( data.button_text ) { #>
							{{ data.button_text }}
						<# } else { #>
							<?php esc_attr_e( 'Next', 'bonbeno' ); ?>
						<# } #>
					</a>
					<# if ( ! data.last_step ) { #>
						<a class="sf-guided-tour-skip" href="#">
						<# if ( data.first_step ) { #>
							<?php esc_attr_e( 'No thanks, skip the tour', 'bonbeno' ); ?>
						<# } else { #>
							<?php esc_attr_e( 'Skip this step', 'bonbeno' ); ?>
						<# } #>
						</a>
					<# } #>
				</div>
			</script>
			<?php
		}

		/**
		 * Guided tour steps.
		 *
		 * @since 2.2.0
		 */
		public function guided_tour_steps() {
			$steps = array();

			$steps[] = array(
				'title'       => __( 'Welcome to the Customizer', 'bonbeno' ),
				'message'     => sprintf( __( 'Here you can control the overall look and feel of your store.%sTo get started, let\'s add your logo', 'bonbeno' ), PHP_EOL . PHP_EOL ),
				'button_text' => __( 'Let\'s go!', 'bonbeno' ),
				'section'     => '#customize-info',
			);

			if ( ! has_custom_logo() ) {
				$steps[] = array(
					'title'   => __( 'Add your logo', 'bonbeno' ),
					'message' => __( 'Open the Site Identity Panel, then click the \'Select Logo\' button to upload your logo.', 'bonbeno' ),
					'section' => 'title_tagline',
				);
			}

			$steps[] = array(
				'title'   => __( 'Customize your navigation menus', 'bonbeno' ),
				'message' => __( 'Organize your menus by adding Pages, Categories, Tags, and Custom Links.', 'bonbeno' ),
				'section' => 'nav_menus',
			);

			$steps[] = array(
				'title'   => __( 'Choose your accent color', 'bonbeno' ),
				'message' => __( 'In the typography panel you can specify an accent color which will be applied to things like links and star ratings. We recommend using your brand color for this setting.', 'bonbeno' ),
				'section' => 'bonbeno_typography',
			);

			$steps[] = array(
				'title'   => __( 'Color your buttons', 'bonbeno' ),
				'message' => __( 'Choose colors for your button backgrounds and text. Once again, brand colors are good choices here.', 'bonbeno' ),
				'section' => 'bonbeno_buttons',
			);

			$steps[] = array(
				'title'       =>  '',
				'message'     => sprintf( __( 'All set! Remember to %ssave & publish%s your changes when you\'re done.%sYou can return to your dashboard by clicking the X in the top left corner.', 'bonbeno' ), '<strong>', '</strong>', PHP_EOL . PHP_EOL ),
				'section'     => '#customize-header-actions .save',
				'button_text' => __( 'Done', 'bonbeno' ),
			);

			return $steps;
		}
	}

endif;

return new bonbeno_NUX_Guided_Tour();
