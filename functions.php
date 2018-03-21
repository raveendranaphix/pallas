<?php
/**
 * Pallas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pallas
 */

// Image resizer
require __DIR__ . '/inc/lib/aq_resizer.php';

if ( ! function_exists( 'pallas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pallas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Pallas, use a find and replace
		 * to change 'pallas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pallas', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pallas' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pallas_custom_background_args', array(
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
			'height'      => 60,
			'width'       => 305,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pallas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pallas_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pallas_content_width', 640 );
}
add_action( 'after_setup_theme', 'pallas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pallas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pallas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pallas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pallas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pallas_scripts() {
	wp_enqueue_style( 'pallas-style', get_stylesheet_uri() );

	// CSS
	wp_enqueue_style( 'pallas-base', get_template_directory_uri() . '/assets/css/base.css', [], null );
	wp_enqueue_style( 'pallas-skeleton', get_template_directory_uri() . '/assets/css/skeleton.css', [], null );
	wp_enqueue_style( 'pallas-layout', get_template_directory_uri() . '/assets/css/layout.css', [], null );
	wp_enqueue_style( 'pallas-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', [], null );
	wp_enqueue_style( 'pallas-retina', get_template_directory_uri() . '/assets/css/retina.css', [], null );
	wp_enqueue_style( 'pallas-animsition.min', get_template_directory_uri() . '/assets/css/animsition.min.css', [], null );

	// JAVASCRIPT
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'pallas-modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-animsition', get_template_directory_uri() . '/assets/js/jquery.animsition.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-retina', get_template_directory_uri() . '/assets/js/retina-1.1.0.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-classie', get_template_directory_uri() . '/assets/js/classie.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-cbpAnimatedHeader', get_template_directory_uri() . '/assets/js/cbpAnimatedHeader.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-menu', get_template_directory_uri() . '/assets/js/menu.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-scroll.js', get_template_directory_uri() . '/assets/js/scroll.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-animated-headline', get_template_directory_uri() . '/assets/js/animated-headline.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-tipper', get_template_directory_uri() . '/assets/js/jquery.fs.tipper.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'pallas-common', get_template_directory_uri() . '/assets/js/common.js', array(), null, true );

	if ( is_home() || is_front_page() ) {
		wp_enqueue_script( 'pallas-custom-home1', get_template_directory_uri() . '/assets/js/custom-home1.js', ['jquery'], null, true );
	}

	if ( is_page_template( 'templates/template-about.php' ) ) {
		wp_enqueue_script( 'pallas-about', get_template_directory_uri() . '/assets/js/custom-about.js', array(), null, true );
	}

	if ( is_page_template( 'templates/template-jurnal.php' ) ) {
		wp_enqueue_script( 'pallas-about', get_template_directory_uri() . '/assets/js/custom-blog.js', array(), null, true );
	}

	if ( is_page_template( 'templates/template-hello-minimal.php' ) ) {
		wp_enqueue_script( 'pallas-about', get_template_directory_uri() . '/assets/js/custom-contact2.js', array(), null, true );
	}

	/*
	wp_enqueue_script( 'pallas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'pallas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	*/

}
add_action( 'wp_enqueue_scripts', 'pallas_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function pallas_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'pallas_theme_add_editor_styles' );

/**
 * General theme functions.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Nav walker.
 */
require get_template_directory() . '/inc/class.nav_walker.php';

/**
 * Custom post types.
 */
require get_template_directory() . '/inc/post-types/member_type.php';

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
