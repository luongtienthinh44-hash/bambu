<?php
/**
 * Bambu theme functions and definitions.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// define( 'BAMBU_VERSION', '1.0.0' );
define( 'BAMBU_VERSION', time() );

function bambu_setup() {
    load_theme_textdomain( 'bambu', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
    );

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'bambu' ),
        )
    );
}
add_action( 'after_setup_theme', 'bambu_setup' );

require_once get_template_directory() . '/acf/innovation-intelligence-options.php';
require_once get_template_directory() . '/acf/global-sections-options.php';

function bambu_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style( 'bambu-reset', $theme_uri . '/assets/css/reset.min.css', array(), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-fonts', $theme_uri . '/assets/css/fonts.css', array(), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-globals', $theme_uri . '/assets/css/globals.css', array( 'bambu-reset', 'bambu-fonts' ), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-style', $theme_uri . '/style.css', array( 'bambu-globals' ), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-cta-banner', $theme_uri . '/assets/css/cta-banner.css', array( 'bambu-style' ), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-partners-section', $theme_uri . '/assets/css/partners-section.css', array( 'bambu-cta-banner' ), BAMBU_VERSION );

    $is_innovation_intelligence_page = is_page_template( 'page-innovation-intelligence.php' ) || is_page( 'innovation-intelligence' );
    $is_pricing_page                = is_page_template( 'page-pricing.php' ) || is_page( 'pricing' );
    $is_services_page               = is_page_template( 'page-our-services.php' ) || is_page( 'our-services' );
    $is_about_page                  = is_page_template( 'page-about-us.php' ) || is_page( array( 'about', 'about-us' ) );
    $is_challenge_hub_page          = is_page_template( 'page-challenge-hub.php' ) || is_page( 'challenge-hub' );
    $is_community_page              = is_page_template( 'page-community.php' ) || is_page( 'community' );

    if ( $is_innovation_intelligence_page || $is_pricing_page || $is_services_page || $is_about_page || $is_challenge_hub_page || $is_community_page ) {
        wp_enqueue_style(
            'bambu-innovation-intelligence',
            $theme_uri . '/assets/css/innovation-intelligence.css',
            array( 'bambu-style' ),
            BAMBU_VERSION
        );

    }

    if ( $is_innovation_intelligence_page ) {
        wp_enqueue_script(
            'bambu-innovation-intelligence',
            $theme_uri . '/assets/js/innovation-intelligence.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    if ( $is_pricing_page ) {
        wp_enqueue_style( 'bambu-pricing', $theme_uri . '/assets/css/pricing.css', array( 'bambu-innovation-intelligence' ), BAMBU_VERSION );
        wp_enqueue_script(
            'bambu-pricing',
            $theme_uri . '/assets/js/pricing.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    if ( $is_services_page ) {
        wp_enqueue_style( 'bambu-services', $theme_uri . '/assets/css/services.css', array( 'bambu-innovation-intelligence' ), BAMBU_VERSION );
        wp_enqueue_script(
            'bambu-services',
            $theme_uri . '/assets/js/services.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    if ( $is_about_page ) {
        wp_enqueue_style( 'bambu-about', $theme_uri . '/assets/css/about.css', array( 'bambu-innovation-intelligence' ), BAMBU_VERSION );
    }

    if ( $is_challenge_hub_page ) {
        wp_enqueue_style( 'bambu-challenge-hub', $theme_uri . '/assets/css/challenge-hub.css', array( 'bambu-innovation-intelligence' ), BAMBU_VERSION );
        wp_enqueue_script(
            'bambu-challenge-hub',
            $theme_uri . '/assets/js/challenge-hub.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    if ( $is_community_page ) {
        wp_enqueue_style( 'bambu-community', $theme_uri . '/assets/css/community.css', array( 'bambu-innovation-intelligence' ), BAMBU_VERSION );
        wp_enqueue_script(
            'bambu-community',
            $theme_uri . '/assets/js/community.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    if ( is_page_template( 'page-detail.php' ) || is_page( 'detail' ) ) {
        wp_enqueue_style(
            'bambu-detail',
            $theme_uri . '/assets/css/detail.css',
            array( 'bambu-style' ),
            BAMBU_VERSION
        );

        wp_enqueue_script(
            'bambu-detail',
            $theme_uri . '/assets/js/detail.js',
            array( 'bambu-main' ),
            BAMBU_VERSION,
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    wp_enqueue_script(
        'bambu-main',
        $theme_uri . '/assets/js/main.js',
        array(),
        BAMBU_VERSION,
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'bambu_enqueue_assets' );

/**
 * Resolve a theme image path to the matching WordPress Media Library URL.
 *
 * Imported theme assets are linked by their original relative path so files
 * with the same basename in different folders remain unambiguous.
 *
 * @param string $relative_path Relative path inside the imported Media Library assets.
 * @return string
 */
function bambu_get_media_asset_url( $relative_path ) {
	static $cache = array();

	$relative_path = ltrim( str_replace( '\\', '/', (string) $relative_path ), '/' );

	if ( isset( $cache[ $relative_path ] ) ) {
		return $cache[ $relative_path ];
	}

	$attachment_ids = get_posts(
		array(
			'post_type'      => 'attachment',
			'post_status'    => 'inherit',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_key'       => '_bambu_theme_asset_path',
			'meta_value'     => $relative_path,
		)
	);

	$cache[ $relative_path ] = ! empty( $attachment_ids ) ? (string) wp_get_attachment_url( (int) $attachment_ids[0] ) : '';

	return $cache[ $relative_path ];
}

/**
 * Load the BambuUP styles on the native WordPress authentication screen.
 */
function bambu_login_enqueue_assets() {
    wp_enqueue_style( 'bambu-auth-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), BAMBU_VERSION );
    wp_enqueue_style( 'bambu-auth', get_template_directory_uri() . '/assets/css/auth.css', array( 'bambu-auth-fonts' ), BAMBU_VERSION );
}
add_action( 'login_enqueue_scripts', 'bambu_login_enqueue_assets' );

/**
 * Use the public site as the destination for the authentication logo.
 */
function bambu_login_header_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'bambu_login_header_url' );

/**
 * Set accessible text for the authentication logo link.
 */
function bambu_login_header_text() {
    return '<span class="bambu-login-brand-main">Bambu</span><span class="bambu-login-brand-suffix">UP</span>';
}
add_filter( 'login_headertext', 'bambu_login_header_text' );

/**
 * Register the Opportunities custom post type.
 */
function bambu_register_opportunities_post_type() {
	$labels = array(
		'name'               => esc_html__( 'Opportunities', 'bambu' ),
		'singular_name'      => esc_html__( 'Opportunity', 'bambu' ),
		'menu_name'          => esc_html__( 'Opportunities', 'bambu' ),
		'add_new'            => esc_html__( 'Add New', 'bambu' ),
		'add_new_item'       => esc_html__( 'Add New Opportunity', 'bambu' ),
		'edit_item'          => esc_html__( 'Edit Opportunity', 'bambu' ),
		'new_item'           => esc_html__( 'New Opportunity', 'bambu' ),
		'view_item'          => esc_html__( 'View Opportunity', 'bambu' ),
		'view_items'         => esc_html__( 'View Opportunities', 'bambu' ),
		'search_items'       => esc_html__( 'Search Opportunities', 'bambu' ),
		'not_found'          => esc_html__( 'No opportunities found.', 'bambu' ),
		'not_found_in_trash' => esc_html__( 'No opportunities found in Trash.', 'bambu' ),
		'all_items'          => esc_html__( 'All Opportunities', 'bambu' ),
	);

	register_post_type(
		'opportunities',
		array(
			'labels'             => $labels,
			'public'             => true,
			'show_in_rest'       => true,
			'menu_icon'          => 'dashicons-lightbulb',
			'has_archive'        => true,
			'rewrite'            => array( 'slug' => 'opportunities' ),
			'capability_type'    => 'post',
			'map_meta_cap'       => true,
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'revisions' ),
			'taxonomies'         => array( 'opportunities_category', 'opportunities_tag', 'opportunities_type' ),
		)
	);

	register_taxonomy(
		'opportunities_category',
		array( 'opportunities' ),
		array(
			'labels'            => array(
				'name'              => esc_html__( 'Opportunity Categories', 'bambu' ),
				'singular_name'     => esc_html__( 'Opportunity Category', 'bambu' ),
				'menu_name'         => esc_html__( 'Categories', 'bambu' ),
				'all_items'         => esc_html__( 'All Opportunity Categories', 'bambu' ),
				'parent_item'       => esc_html__( 'Parent Opportunity Category', 'bambu' ),
				'parent_item_colon' => esc_html__( 'Parent Opportunity Category:', 'bambu' ),
				'edit_item'         => esc_html__( 'Edit Opportunity Category', 'bambu' ),
				'update_item'       => esc_html__( 'Update Opportunity Category', 'bambu' ),
				'add_new_item'      => esc_html__( 'Add New Opportunity Category', 'bambu' ),
				'new_item_name'     => esc_html__( 'New Opportunity Category Name', 'bambu' ),
				'search_items'      => esc_html__( 'Search Opportunity Categories', 'bambu' ),
			),
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'hierarchical'      => true,
			'rewrite'           => array( 'slug' => 'opportunities-category' ),
		)
	);

	register_taxonomy(
		'opportunities_tag',
		array( 'opportunities' ),
		array(
			'labels'            => array(
				'name'                       => esc_html__( 'Opportunity Tags', 'bambu' ),
				'singular_name'              => esc_html__( 'Opportunity Tag', 'bambu' ),
				'menu_name'                  => esc_html__( 'Tags', 'bambu' ),
				'all_items'                  => esc_html__( 'All Opportunity Tags', 'bambu' ),
				'edit_item'                  => esc_html__( 'Edit Opportunity Tag', 'bambu' ),
				'update_item'                => esc_html__( 'Update Opportunity Tag', 'bambu' ),
				'add_new_item'               => esc_html__( 'Add New Opportunity Tag', 'bambu' ),
				'new_item_name'              => esc_html__( 'New Opportunity Tag Name', 'bambu' ),
				'search_items'               => esc_html__( 'Search Opportunity Tags', 'bambu' ),
				'popular_items'              => esc_html__( 'Popular Opportunity Tags', 'bambu' ),
				'separate_items_with_commas' => esc_html__( 'Separate tags with commas', 'bambu' ),
				'add_or_remove_items'        => esc_html__( 'Add or remove tags', 'bambu' ),
				'choose_from_most_used'      => esc_html__( 'Choose from the most used tags', 'bambu' ),
				'not_found'                  => esc_html__( 'No opportunity tags found.', 'bambu' ),
			),
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'hierarchical'      => false,
			'rewrite'           => array( 'slug' => 'opportunities-tag' ),
		)
	);

	register_taxonomy(
		'opportunities_type',
		array( 'opportunities' ),
		array(
			'labels'            => array(
				'name'          => esc_html__( 'Opportunity Types', 'bambu' ),
				'singular_name' => esc_html__( 'Opportunity Type', 'bambu' ),
				'menu_name'     => esc_html__( 'Types', 'bambu' ),
				'all_items'     => esc_html__( 'All Opportunity Types', 'bambu' ),
				'edit_item'     => esc_html__( 'Edit Opportunity Type', 'bambu' ),
				'update_item'   => esc_html__( 'Update Opportunity Type', 'bambu' ),
				'add_new_item'  => esc_html__( 'Add New Opportunity Type', 'bambu' ),
				'new_item_name' => esc_html__( 'New Opportunity Type Name', 'bambu' ),
			),
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'hierarchical'      => true,
			'rewrite'           => array( 'slug' => 'opportunities-type' ),
		)
	);
}
add_action( 'init', 'bambu_register_opportunities_post_type' );

/**
 * Register the widget area exposed by the theme.
 */
function bambu_register_sidebars() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bambu' ),
			'id'            => 'bambu-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'bambu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bambu_register_sidebars' );
