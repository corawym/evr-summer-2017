<?php
/**
 * EVR Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EVR_Theme
 */

if ( ! function_exists( 'evr_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function evr_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // evr_setup

/**
 * Custom template tags for this theme.
 */
 require get_template_directory() . '/inc/template-tags.php';
 
 /**
  * Custom functions that act independently of the theme templates.
  */
 require get_template_directory() . '/inc/extras.php';

add_action( 'after_setup_theme', 'evr_setup' );
add_action( 'widgets_init', 'evr_widgets_init' );
add_action( 'wp_enqueue_scripts', 'evr_scripts' );
add_action( 'after_setup_theme', 'evr_content_width', 0 );
add_filter( 'stylesheet_uri', 'evr_minified_css', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function evr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'evr_content_width', 640 );
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function evr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function evr_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}

/**
 * Remove posts from admin bar
 */
function remove_menu () 
{
   remove_menu_page('edit.php');
} 

add_action('admin_menu', 'remove_menu');

/**
 * Enqueue scripts and styles.
 */
function evr_scripts() {
	wp_enqueue_style( 'evr-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,700', false ); 

	wp_enqueue_style( 'jquery' );
	wp_enqueue_script( 'spectragram', get_template_directory_uri() . '/build/js/spectragram.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/build/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'evr-functionality', get_template_directory_uri() . '/build/js/evr-functionality.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'evr-popup', get_template_directory_uri() . '/build/js/modal-subscribe.min.js', array('jquery'), '1.0', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

