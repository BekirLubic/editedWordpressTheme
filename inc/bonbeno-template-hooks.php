<?php
/**
 * bonbeno hooks
 *
 * @package bonbeno
 */

/**
 * General
 *
 * @see  bonbeno_header_widget_region()
 * @see  bonbeno_get_sidebar()
 */
add_action( 'bonbeno_before_content', 'bonbeno_header_widget_region', 10 );
add_action( 'bonbeno_sidebar',        'bonbeno_get_sidebar',          10 );

/**
 * Header
 *
 * @see  bonbeno_skip_links()
 * @see  bonbeno_secondary_navigation()
 * @see  bonbeno_site_branding()
 * @see  bonbeno_primary_navigation()
 */
add_action( 'bonbeno_header', 'bonbeno_header_container',                 0 );
add_action( 'bonbeno_header', 'bonbeno_skip_links',                       5 );
add_action( 'bonbeno_header', 'bonbeno_site_branding',                    20 );
add_action( 'bonbeno_header', 'bonbeno_secondary_navigation',             30 );
add_action( 'bonbeno_header', 'bonbeno_header_container_close',           41 );
add_action( 'bonbeno_header', 'bonbeno_primary_navigation_wrapper',       42 );
add_action( 'bonbeno_header', 'bonbeno_primary_navigation',               50 );
add_action( 'bonbeno_header', 'bonbeno_primary_navigation_wrapper_close', 68 );

/**
 * Footer
 *
 * @see  bonbeno_footer_widgets()
 * @see  bonbeno_credit()
 */
add_action( 'bonbeno_footer', 'bonbeno_footer_widgets', 10 );
add_action( 'bonbeno_footer', 'bonbeno_credit',         20 );

/**
 * Homepage
 *
 * @see  bonbeno_homepage_content()
 * @see  bonbeno_product_categories()
 * @see  bonbeno_recent_products()
 * @see  bonbeno_featured_products()
 * @see  bonbeno_popular_products()
 * @see  bonbeno_on_sale_products()
 * @see  bonbeno_best_selling_products()
 */
add_action( 'homepage', 'bonbeno_homepage_content',      10 );
add_action( 'homepage', 'bonbeno_product_categories',    20 );
add_action( 'homepage', 'bonbeno_recent_products',       30 );
add_action( 'homepage', 'bonbeno_featured_products',     40 );
add_action( 'homepage', 'bonbeno_popular_products',      50 );
add_action( 'homepage', 'bonbeno_on_sale_products',      60 );
add_action( 'homepage', 'bonbeno_best_selling_products', 70 );

/**
 * Posts
 *
 * @see  bonbeno_post_header()
 * @see  bonbeno_post_meta()
 * @see  bonbeno_post_content()
 * @see  bonbeno_paging_nav()
 * @see  bonbeno_single_post_header()
 * @see  bonbeno_post_nav()
 * @see  bonbeno_display_comments()
 */
add_action( 'bonbeno_loop_post',           'bonbeno_post_header',          10 );
add_action( 'bonbeno_loop_post',           'bonbeno_post_meta',            20 );
add_action( 'bonbeno_loop_post',           'bonbeno_post_content',         30 );
add_action( 'bonbeno_loop_after',          'bonbeno_paging_nav',           10 );
add_action( 'bonbeno_single_post',         'bonbeno_post_header',          10 );
add_action( 'bonbeno_single_post',         'bonbeno_post_meta',            20 );
add_action( 'bonbeno_single_post',         'bonbeno_post_content',         30 );
add_action( 'bonbeno_single_post_bottom',  'bonbeno_post_nav',             10 );
add_action( 'bonbeno_single_post_bottom',  'bonbeno_display_comments',     20 );
add_action( 'bonbeno_post_content_before', 'bonbeno_post_thumbnail',       10 );

/**
 * Pages
 *
 * @see  bonbeno_page_header()
 * @see  bonbeno_page_content()
 * @see  bonbeno_display_comments()
 */
add_action( 'bonbeno_page',       'bonbeno_page_header',          10 );
add_action( 'bonbeno_page',       'bonbeno_page_content',         20 );
add_action( 'bonbeno_page_after', 'bonbeno_display_comments',     10 );

add_action( 'bonbeno_homepage',       'bonbeno_homepage_header',      10 );
add_action( 'bonbeno_homepage',       'bonbeno_page_content',         20 );
