<?php
/**
 * diligent_technologies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package diligent_technologies
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function diligent_technologies_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on diligent_technologies, use a find and replace
		* to change 'diligent_technologies' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'diligent_technologies', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'diligent_technologies' ),
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
			'diligent_technologies_custom_background_args',
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
add_action( 'after_setup_theme', 'diligent_technologies_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function diligent_technologies_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'diligent_technologies_content_width', 640 );
}
add_action( 'after_setup_theme', 'diligent_technologies_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diligent_technologies_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Donation', 'diligent_technologies' ),
			'id'            => 'donation',
			'description'   => esc_html__( 'Add widgets here.', 'diligent_technologies' ),
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => ' <h5 class="card-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'diligent_technologies_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function diligent_technologies_scripts() {

	wp_enqueue_style( 'font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2' );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2' );
	wp_enqueue_style( 'swiper_style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '10.3.0' );
	wp_enqueue_style( 'diligent_technologies-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'diligent_technologies-style', 'rtl', 'replace' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
	wp_enqueue_script('swiper_bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '10.3.0', true);
	wp_enqueue_script( 'diligent_technologies-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );


	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'diligent_technologies_scripts' );

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
