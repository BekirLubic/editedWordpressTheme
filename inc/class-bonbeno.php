<?php
/**
 * Bonbeno Class
 *
 * @author   WooThemes
 * @since    2.0.0
 * @package  bonbeno
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'bonbeno' ) ) :

	/**
	 * The main Bonbeno class
	 */
	class bonbeno {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'after_setup_theme',          array( $this, 'setup' ) );
			add_action( 'widgets_init',               array( $this, 'widgets_init' ) );
			add_action( 'wp_enqueue_scripts',         array( $this, 'scripts' ),       10 );
			add_action( 'wp_enqueue_scripts',         array( $this, 'child_scripts' ), 30 ); // After WooCommerce.
			add_filter( 'body_class',                 array( $this, 'body_classes' ) );
			add_filter( 'wp_page_menu_args',          array( $this, 'page_menu_args' ) );
			add_filter( 'navigation_markup_template', array( $this, 'navigation_markup_template' ) );
			add_action( 'enqueue_embed_scripts',      array( $this, 'print_embed_styles' ) );
		}

		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 */
		public function setup() {
			/*
			 * Load Localisation files.
			 *
			 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
			 */

			// Loads wp-content/languages/themes/bonbeno-it_IT.mo.
			load_theme_textdomain( 'bonbeno', trailingslashit( WP_LANG_DIR ) . 'themes/' );

			// Loads wp-content/themes/child-theme-name/languages/it_IT.mo.
			load_theme_textdomain( 'bonbeno', get_stylesheet_directory() . '/languages' );

			// Loads wp-content/themes/bonbeno/languages/it_IT.mo.
			load_theme_textdomain( 'bonbeno', get_template_directory() . '/languages' );

			/**
			 * Add default posts and comments RSS feed links to head.
			 */
			add_theme_support( 'automatic-feed-links' );

			/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#Post_Thumbnails
			 */
			add_theme_support( 'post-thumbnails' );

			/**
			 * Enable support for site logo
			 */
			add_theme_support( 'custom-logo', apply_filters( 'bonbeno_custom_logo_args', array(
				'height'      => 20,
				'width'       => 20,
			) ) );

			// This theme uses wp_nav_menu() in two locations.
			register_nav_menus( apply_filters( 'bonbeno_register_nav_menus', array(
				'topHeader'   => __( 'Primary Menu Header', 'bonbeno' ),
				'productsMenu' => __( 'Products Menu', 'bonbeno' ),
				'mainFooterCompanyInfo'  => __( 'Footer Navigation - Company Info', 'bonbeno' ),
				'mainFooterPurchaseInfo'  => __( 'Footer Navigation - Purchase Info', 'bonbeno' ),
				'mainFooterCustomerService'  => __( 'Footer Navigation - Customer Service', 'bonbeno' ),

			) ) );

			/*
			 * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
			 * to output valid HTML5.
			 */
			add_theme_support( 'html5', apply_filters( 'bonbeno_html5_args', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'widgets',
			) ) );

			// Setup the WordPress core custom background feature.
			add_theme_support( 'custom-background', apply_filters( 'bonbeno_custom_background_args', array(
				'default-color' => apply_filters( 'bonbeno_default_background_color', 'ffffff' ),
				'default-image' => '',
			) ) );

			/**
			 *  Add support for the Site Logo plugin and the site logo functionality in JetPack
			 *  https://github.com/automattic/site-logo
			 *  http://jetpack.me/
			 */
			add_theme_support( 'site-logo', apply_filters( 'bonbeno_site_logo_args', array(
				'size' => 'full'
			) ) );

			// Declare WooCommerce support.
			add_theme_support( 'woocommerce', apply_filters( 'bonbeno_woocommerce_args', array(
				'single_image_width'    => 416,
				'thumbnail_image_width' => 324,
				'product_grid'          => array(
					'default_columns' => 3,
					'default_rows'    => 4,
					'min_columns'     => 1,
					'max_columns'     => 6,
					'min_rows'        => 1
				)
			) ) );

			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );

			// Declare support for title theme feature.
			add_theme_support( 'title-tag' );

			// Declare support for selective refreshing of widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
		}

		/**
		 * Register widget area.
		 *
		 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
		 */
		public function widgets_init() {
			register_sidebar(array(
				'name' => 'Top selling products' ,
				'id' => 'top_selling_products',
				'description' =>('Place on homepage where you show top selled products'), 
			));
			register_sidebar(array(
				'name' => 'Best deals' ,
				'id' => 'best_deals_products',
				'description' =>('Place on homepage where you show "Best deals products"'), 
			));
			register_sidebar(array(
				'name' => 'New arrivals' ,
				'id' => 'new_arrivals_products',
				'description' =>('Place on homepage where you show "New arrivals"'), 
			));
			register_sidebar(array(
				'name' => 'New stories' , 
				'id' => 'new_stories',
				'description' =>('Place on homepage where you show "New stories"'), 
			));
			register_sidebar(array(
				'name' => 'Join us on social media' ,
				'id' => 'join_us_social_media',
				'description' =>('Place on homepage where is presented your social media activities'), 
			));
			register_sidebar(array(
				'name' => 'Add your mail for promotions',
				'id' => 'promotions_mail',
				'description' => ('Add customers mails for promotions - place: footer, right'),
			));



	/** UGASENI WIDGETI
				$sidebar_args['sidebar'] = array(
					'name'          => __( 'Sidebar', 'bonbeno' ),
					'id'            => 'sidebar-1',
					'description'   => ''
				);

				$sidebar_args['header'] = array(
					'name'        => __( 'Below Header', 'bonbeno' ),
					'id'          => 'header-1',
					'description' => __( 'Widgets added to this region will appear beneath the header and above the main content.', 'bonbeno' ),
				);

				$rows    = intval( apply_filters( 'bonbeno_footer_widget_rows', 1 ) );
				$regions = intval( apply_filters( 'bonbeno_footer_widget_columns', 4 ) );

				for ( $row = 1; $row <= $rows; $row++ ) {
					for ( $region = 1; $region <= $regions; $region++ ) {
						$footer_n = $region + $regions * ( $row - 1 ); // Defines footer sidebar ID.
						$footer   = sprintf( 'footer_%d', $footer_n );

						if ( 1 == $rows ) {
							$footer_region_name = sprintf( __( 'Footer Column %1$d', 'bonbeno' ), $region );
							$footer_region_description = sprintf( __( 'Widgets added here will appear in column %1$d of the footer.', 'bonbeno' ), $region );
						} else {
							$footer_region_name = sprintf( __( 'Footer Row %1$d - Column %2$d', 'bonbeno' ), $row, $region );
							$footer_region_description = sprintf( __( 'Widgets added here will appear in column %1$d of footer row %2$d.', 'bonbeno' ), $region, $row );
						}

						$sidebar_args[ $footer ] = array(
							'name'        => $footer_region_name,
							'id'          => sprintf( 'footer-%d', $footer_n ),
							'description' => $footer_region_description,
						);
					}
				}
	
			$sidebar_args = apply_filters( 'bonbeno_sidebar_args', $sidebar_args );
	**/
	/**
			foreach ( $sidebar_args as $sidebar => $args ) {
				$widget_tags = array(
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<span class="gamma widget-title">',
					'after_title'   => '</span>',
				);

				/**
				 * Dynamically generated filter hooks. Allow changing widget wrapper and title tags. See the list below.
				 *
				 * 'bonbeno_header_widget_tags'
				 * 'bonbeno_sidebar_widget_tags'
				 *
				 * 'bonbeno_footer_1_widget_tags'
				 * 'bonbeno_footer_2_widget_tags'
				 * 'bonbeno_footer_3_widget_tags'
				 * 'bonbeno_footer_4_widget_tags'
				 */
	/**			$filter_hook = sprintf( 'bonbeno_%s_widget_tags', $sidebar );
				$widget_tags = apply_filters( $filter_hook, $widget_tags );

				if ( is_array( $widget_tags ) ) {
					register_sidebar( $args + $widget_tags );
				}
			}
	**/
		}

		/**
		 * Enqueue scripts and styles.
		 *
		 * @since  1.0.0
		 */
		public function scripts() {
			global $bonbeno_version;

			/**
			 * Styles
			 */
			wp_enqueue_style( 'bonbeno-style', get_template_directory_uri() . '/style.css', '', $bonbeno_version );
			wp_style_add_data( 'bonbeno-style', 'rtl', 'replace' );

			wp_enqueue_style( 'bonbeno-icons', get_template_directory_uri() . '/assets/css/base/icons.css', '', $bonbeno_version );
			wp_style_add_data( 'bonbeno-icons', 'rtl', 'replace' );

			/**
			 * Fonts
			 */
			$google_fonts = apply_filters( 'bonbeno_google_font_families', array(
				'source-sans-pro' => 'Source+Sans+Pro:400,300,300italic,400italic,600,700,900',
			) );

			$query_args = array(
				'family' => implode( '|', $google_fonts ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

			wp_enqueue_style( 'bonbeno-fonts', $fonts_url, array(), null );

			/**
			 * Scripts
			 */
			$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

			wp_enqueue_script( 'bonbeno-navigation', get_template_directory_uri() . '/assets/js/navigation' . $suffix . '.js', array(), $bonbeno_version, true );
			wp_enqueue_script( 'bonbeno-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . $suffix . '.js', array(), '20130115', true );

			if ( has_nav_menu( 'handheld' ) ) {
				$bonbeno_l10n = array(
					'expand'   => __( 'Expand child menu', 'bonbeno' ),
					'collapse' => __( 'Collapse child menu', 'bonbeno' ),
				);

				wp_localize_script( 'bonbeno-navigation', 'bonbenoScreenReaderText', $bonbeno_l10n );
			}

			if ( is_page_template( 'template-homepage.php' ) && has_post_thumbnail() ) {
				wp_enqueue_script( 'bonbeno-homepage', get_template_directory_uri() . '/assets/js/homepage' . $suffix . '.js', array(), $bonbeno_version, true );
			}

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

		/**
		 * Enqueue child theme stylesheet.
		 * A separate function is required as the child theme css needs to be enqueued _after_ the parent theme
		 * primary css and the separate WooCommerce css.
		 *
		 * @since  1.5.3
		 */
		public function child_scripts() {
			if ( is_child_theme() ) {
				$child_theme = wp_get_theme( get_stylesheet() );
				wp_enqueue_style( 'bonbeno-child-style', get_stylesheet_uri(), array(), $child_theme->get( 'Version' ) );
			}
		}

		/**
		 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
		 *
		 * @param array $args Configuration arguments.
		 * @return array
		 */
		public function page_menu_args( $args ) {
			$args['show_home'] = true;
			return $args;
		}

		/**
		 * Adds custom classes to the array of body classes.
		 *
		 * @param array $classes Classes for the body element.
		 * @return array
		 */
		public function body_classes( $classes ) {
			// Adds a class of group-blog to blogs with more than 1 published author.
			if ( is_multi_author() ) {
				$classes[] = 'group-blog';
			}

			if ( ! function_exists( 'woocommerce_breadcrumb' ) ) {
				$classes[]	= 'no-wc-breadcrumb';
			}

			/**
			 * What is this?!
			 * Take the blue pill, close this file and forget you saw the following code.
			 * Or take the red pill, filter bonbeno_make_me_cute and see how deep the rabbit hole goes...
			 */
			$cute = apply_filters( 'bonbeno_make_me_cute', false );

			if ( true === $cute ) {
				$classes[] = 'bonbeno-cute';
			}

			// If our main sidebar doesn't contain widgets, adjust the layout to be full-width.
			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				$classes[] = 'bonbeno-full-width-content';
			}

			// Add class when using homepage template + featured image
			if ( is_page_template( 'template-homepage.php' ) && has_post_thumbnail() ) {
				$classes[] = 'has-post-thumbnail';
			}

			// Add class when Secondary Navigation is in use
			if ( has_nav_menu( 'secondary' ) ) {
				$classes[] = 'bonbeno-secondary-navigation';
			}

			return $classes;
		}

		/**
		 * Custom navigation markup template hooked into `navigation_markup_template` filter hook.
		 */
		public function navigation_markup_template() {
			$template  = '<nav id="post-navigation" class="navigation %1$s" role="navigation" aria-label="' . esc_html__( 'Post Navigation', 'bonbeno' ) . '">';
			$template .= '<h2 class="screen-reader-text">%2$s</h2>';
			$template .= '<div class="nav-links">%3$s</div>';
			$template .= '</nav>';

			return apply_filters( 'bonbeno_navigation_markup_template', $template );
		}

		/**
		 * Add styles for embeds
		 */
		public function print_embed_styles() {
			wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,700,900' );
			$accent_color     = get_theme_mod( 'bonbeno_accent_color' );
			$background_color = bonbeno_get_content_background_color();
			?>
			<style type="text/css">
				.wp-embed {
					padding: 2.618em !important;
					border: 0 !important;
					border-radius: 3px !important;
					font-family: "Source Sans Pro", "Open Sans", sans-serif !important;
					background-color: <?php echo esc_html( bonbeno_adjust_color_brightness( $background_color, -7 ) ); ?> !important;
				}

				.wp-embed .wp-embed-featured-image {
					margin-bottom: 2.618em;
				}

				.wp-embed .wp-embed-featured-image img,
				.wp-embed .wp-embed-featured-image.square {
					min-width: 100%;
					margin-bottom: .618em;
				}

				a.wc-embed-button {
					padding: .857em 1.387em !important;
					font-weight: 600;
					background-color: <?php echo esc_attr( $accent_color ); ?>;
					color: #fff !important;
					border: 0 !important;
					line-height: 1;
					border-radius: 0 !important;
					box-shadow:
						inset 0 -1px 0 rgba(#000,.3);
				}

				a.wc-embed-button + a.wc-embed-button {
					background-color: #60646c;
				}
			</style>
			<?php
		}
	}
endif;

return new bonbeno();
