<?php
/**
 * finalProy-WPAdv-portfolio-WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package finalProy-WPAdv-portfolio-WP
 */

if ( ! function_exists( 'finalproy_wpadv_portfolio_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function finalproy_wpadv_portfolio_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on finalProy-WPAdv-portfolio-WP, use a find and replace
		 * to change 'finalproy-wpadv-portfolio-wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'finalproy-wpadv-portfolio-wp', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'finalproy-wpadv-portfolio-wp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'finalproy_wpadv_portfolio_wp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'finalproy_wpadv_portfolio_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finalproy_wpadv_portfolio_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'finalproy_wpadv_portfolio_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'finalproy_wpadv_portfolio_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finalproy_wpadv_portfolio_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'finalproy-wpadv-portfolio-wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'finalproy-wpadv-portfolio-wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'finalproy_wpadv_portfolio_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function finalproy_wpadv_portfolio_wp_scripts() {
	wp_enqueue_style( 'finalproy-wpadv-portfolio-wp-style', get_stylesheet_uri() );

	// linkeando los styles

	// wp_enqueue_style( 'shortcut-icon', get_template_directory_uri() . '/favicon.ico', array(), '1.0', false );

	wp_enqueue_style( 'font-quicksand','https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700', array(), '1.0', false );

	wp_enqueue_style( 'font-playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700', array(), '1.0', false );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', false );

	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0', false );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', false );

	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0', false );

	// wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', array(), '1.0', false );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0', false );

	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0', false );
	



	wp_enqueue_script( 'finalproy-wpadv-portfolio-wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'finalproy-wpadv-portfolio-wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// linkeando js del html

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '20151215', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array(), '20151215', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'finalproy_wpadv_portfolio_wp_scripts' );

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

