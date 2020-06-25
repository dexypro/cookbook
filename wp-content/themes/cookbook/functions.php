<?php
/**
 * cookbook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cookbook
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cookbook_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cookbook_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cookbook, use a find and replace
		 * to change 'cookbook' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cookbook', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'cookbook' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'cookbook_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'cookbook_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cookbook_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cookbook_content_width', 640 );
}
add_action( 'after_setup_theme', 'cookbook_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cookbook_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cookbook' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cookbook' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cookbook_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cookbook_scripts() {
	wp_enqueue_style( 'cookbook-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cookbook-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cookbook-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cookbook_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// CUSTOM POST TYPES


	function cookbook_custom_post_type (){
		$labels = array(
             'name' => 'Recipes',
             'singular_name' => 'Recipe',
             'add_new' => 'Add Recipe',
             'all_items' => 'All Recipes',
             'add_new_item' => 'Add Recipe',
             'edit_item' => 'Edit Item',
             'new_item' => 'New Item',
             'view_item' => 'View Item',
             'search_item' => 'Search Recipes',
             'not_found' => 'No items found',
             'not_found_trash' => 'No items found in trash',
             'parent_item_colon' => 'Parent Item'

		);
		$args = array(
             'labels' => $labels,
             'public' => true,
             'has_archive' => true,
             'publicly_queryable' => true,
             'query_var' => true,
             'rewrite' => true,
             'capability_type' => 'post',
             'hierarchical' => false,
             'supports' => array(
             		'title',
             		'editor',
             		'thumbnail',		
             ),
             'menu_position' => 5,
             'exclude_from_search' => false

		);
		register_post_type('recipes',$args);
}

add_action( 'init', 'cookbook_custom_post_type' );

// Custom Taxonomy

function cookbook_custom_taxonomy() {
	$labels = array(
	'name' => 'Type',
	'singular_name' => 'Type',
	'search_items' => 'Search Types',
	'all_items' => 'All Types',
	'parent_item' => 'Parent Type',
	'parent_item_colon' => 'Parent Type:',
	'edit_item' => 'Edit Type',
	'update_item' => 'Update Type',
	'add_new_item' => 'Add New Recipe Type',
	'new_item_name' => 'New Type Name',
	'menu_name' => 'Type'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'type')
	);

	register_taxonomy('type', array('recipes'), $args);

}

add_action( 'init' , 'cookbook_custom_taxonomy');


