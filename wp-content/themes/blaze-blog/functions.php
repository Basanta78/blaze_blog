<?php
/**
 * blaze blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blaze_blog
 */

if ( ! function_exists( 'blaze_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blaze_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blaze blog, use a find and replace
	 * to change 'blaze-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blaze-blog', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'blaze-blog' ),
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
	// add_theme_support( 'custom-background', apply_filters( 'blaze_blog_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif;
add_action( 'after_setup_theme', 'blaze_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blaze_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blaze_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'blaze_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blaze_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blaze-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blaze-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blaze_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blaze_blog_scripts() {
	wp_enqueue_style( 'blaze-blog-style', get_stylesheet_uri() );
	wp_enqueue_style('blaze-blog-google-fonts',"https://fonts.googleapis.com/css?family=Lato:100,400,400i,700,900,900i|PT+Serif:400,400i,700,700i");
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/layouts/font-awesome.css',array(), '4.6.1');
	wp_enqueue_style('blaze-blog-content-sidebar',get_template_directory_uri() .'/layouts/content-sidebar.css');

	wp_enqueue_script( 'blaze-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'hidesearch', get_template_directory_uri() . '/js/hidesearch.js', array(), '20151215', true );
	wp_enqueue_script( 'font-awesome-js',"https://use.fontawesome.com/7c5e62b1f2.js");


	wp_enqueue_script( 'blaze-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}




	 /*Register */
		wp_register_script( 'slider', get_template_directory_uri() . '/js/jquery.sidr.min.js', 'jquery', '2.2.1' );
        wp_register_script( 'blaze-blog-custom', get_template_directory_uri() . '/js/jquery.custom.js', 'jquery', '1.0', TRUE );
        
		/* Enqueue */
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'slider' );
		wp_enqueue_script( 'blaze-blog-custom' );
		
        wp_enqueue_style( 'slidercss', get_template_directory_uri() . '/layouts/jquery.sidr.dark.min.css', TRUE, '2.2.1' );
}
add_action( 'wp_enqueue_scripts', 'blaze_blog_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
