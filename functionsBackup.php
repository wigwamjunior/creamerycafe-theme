<?php
/**
 * Co-op Creamery Cafe functions and definitions
 *
 * @package Co-op Creamery Cafe
 */

if ( ! function_exists( 'creamerycafe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function creamerycafe_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Co-op Creamery Cafe, use a find and replace
	 * to change 'creamerycafe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'creamerycafe', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'creamerycafe' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	
}
endif; // creamerycafe_setup
add_action( 'after_setup_theme', 'creamerycafe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creamerycafe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creamerycafe_content_width', 640 );
}
add_action( 'after_setup_theme', 'creamerycafe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function creamerycafe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creamerycafe' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'creamerycafe_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function creamerycafe_scripts() {
	wp_enqueue_style( 'creamerycafe-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'creamerycafe-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true );
	
	wp_enqueue_style( 'creamerycafe-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '', 'all' );
	
	wp_enqueue_script( 'creamerycafe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'creamerycafe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null );
	wp_enqueue_script( 'jquery' );
	
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Bitter');
	wp_enqueue_style( 'googleFonts');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creamerycafe_scripts' );

/**
 * Typekit Fonts
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/mss8qpj.js');
}

add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script>try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

/**
 * Bxslider
 */
function bxslider_fire() {
  if ( wp_script_is( 'creamerycafe_scripts', 'done' ) ) { 
  	wp_register_script ( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
	wp_enqueue_script ('main');
	}
}
add_action( 'wp_head', 'bxslider_fire' );
 
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';