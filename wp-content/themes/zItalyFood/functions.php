<?php
/**
 * honeyHome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package honeyHome
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
function honeyhome_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on honeyHome, use a find and replace
		* to change 'honeyhome' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'honeyhome', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'honeyhome' ),
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
			'honeyhome_custom_background_args',
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

	// register for menu

	register_nav_menus([
		'top_menu'			=> 'Mine Menu',
		'footer_menu'		=> 'Footer Menu'

	]);


	register_post_type('food_menu',[
		'public'			=> true,
		'labels'			=> [
			'name'			=> 'Food Menu',
			'all_items'		=> 'All Popular Food ',
			'add_new'		=> 'Add Food Now',
			'add_new_item'		=> 'Add Food Now'

		],

		'supports'			=> ['title']


	]);


	register_taxonomy('menu-category','food_menu',[
		'public'			=> true,
		'hierarchical'		=> true,
		'labels'			=> [
			'name'			=> 'Menu Category'


		]


	]);


	register_post_type('our_news',[
		'public'			=> true,
		'labels'			=> [
			'name'			=> 'Food News',
			'all_items'		=> 'All Food News',
			'add_new'		=> 'Add Food News',
			'add_new_item'	=> 'Add Food News',


		],

		'supports'			=> ['title','thumbnail','editor'],
	]);


	register_post_type('our_feture_post',[
		'public'			=> true,
		'labels'			=> [
			'name'			=> 'Feture Posts',
			'all_items'		=> 'All Feture Post',
			'add_new'		=> 'Add New Feture Post',
			'add_new_item'	=> 'Add New Feture Post'

		],
		'supports'		=> ['title','editor','thumbnail'],


	]);


	register_post_type('our_slider',[
		'public'				=> true,
		'labels'				=> [
			'name'				=> 'Food Slider',
			'all_items'			=> 'All Food Slider',
			'add_new'			=> 'Add New Slider',
			'add_new_item'		=> 'Add New Slider',
			'set_featured_image'	=> 'Set Food Images',
			'remove_featured_image'	=> 'Remove Food Images'



		],

		'supports'			=> ['title','editor','thumbnail']



	]);



	register_post_type('zitaly_food_galleryt',[
		'public'			=> true,
		'labels'			=> [
			'name'			=> 'Gallery Food',
			'all_items'		=> 'All Gallery Food',
			'add_new'		=> 'Add New Gallery Food',
			'add_new_item'	=> 'Add New Gallery Food',

		],

		'supports'			=> ['title','thumbnail'],




	]);
}
add_action( 'after_setup_theme', 'honeyhome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function honeyhome_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'honeyhome_content_width', 640 );
}
add_action( 'after_setup_theme', 'honeyhome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function honeyhome_widgets_init() {



}
add_action( 'widgets_init', 'honeyhome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function honeyhome_scripts() {

    wp_enqueue_style( 'zerogrid', get_stylesheet_uri().'/acess/css/zerogrid.css');
    wp_enqueue_style( 'style-under', get_stylesheet_uri().'/acess/css/style.css');
    wp_enqueue_style( 'slide', get_stylesheet_uri().'/acess/css/slide.css');
    wp_enqueue_style( 'menu', get_stylesheet_uri().'/acess/css/menu.css');
    wp_enqueue_style( 'awesome', get_stylesheet_uri().'/acess/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'honeyhome-style', get_stylesheet_uri());



	wp_enqueue_script('jquery');
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/acess/js/classie.js', ['jquery'], NULL, true );
	wp_enqueue_script( 'demo', get_template_directory_uri() . '/acess/js/demo.js', ['jquery'], NULL, true );
	wp_enqueue_script( 'responsiveslides', get_template_directory_uri() . '/acess/js/responsiveslides.min.js', ['jquery'], NULL, true );
	wp_enqueue_script( 'projs', get_template_directory_uri() . '/acess//js/projs.js', ['jquery'], NULL, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'honeyhome_scripts' );

	function amader_wp_admin_script(){

		wp_enqueue_script( 'admin_scripts', get_template_directory_uri() . '/acess/js/admin_scripts.js');


	}

	add_action( 'admin_enqueue_scripts', 'amader_wp_admin_script' );

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


 add_action('widgets_init','amader_zitaly_widget');

 	function  amader_zitaly_widget() {


	register_sidebar([
		'name'			=> 'Right Sidebar',
		'id'			=> 'italy_sidebar',
		'description'	=> 'Zitaly Sidebar Now',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="wid-header"><h5>',
		'after_title'	=> '</h5></div>'



	]);


	register_sidebar([
			'name'				=> 'Footer Textimorial',
			'id'				=> 'foooter_textimorial',
			'description'		=> 'Zitaly Footer Textimorial',
			'before_widget'		=> '<div class="col-1-3"><div class="wrap-col">',
			'after_widget'		=> '</div></div>',
			'before_title'		=> '<h4>',
			'after_title'		=> '</h4>',
	]);



 }



// register_widgets for right side
include_once"libs/widgets/zitalyfood_about_us.php";
include_once"libs/widgets/zitalyfood_proplar_food.php";
include_once"libs/widgets/zitalyfood_food_gallery.php";
include_once"libs/widgets/zitalyfood_client_about_textimorial.php";
include_once"libs/widgets/zitalyfood_location.php";
include_once"libs/widgets/zitalyfood_open_daily.php";


// CMB2 Box link hear now
include_once"libs/cmb/init.php";
include_once"libs/cmb/config.php";



//Redux link hear now
include_once"libs/opt/redux-core/framework.php";
include_once"libs/opt/sample/sample-config.php";

//TGM freawork link hear now
include_once"libs/tgm/example.php";

// register_widgets for right side
include_once"libs/shortcode/zitaly_food_menu.php";
include_once"libs/shortcode/zitaly_food_staff.php";
include_once"libs/shortcode/zitaly_food_news.php";
include_once"libs/shortcode/zitaly_food_gallery.php";
include_once"libs/shortcode/zitaly_food_map.php";
include_once"libs/shortcode/zitaly_food_address.php";
include_once"libs/shortcode/zitaly_food_title.php";
include_once"libs/shortcode/zitaly_food_future_post.php";
include_once"libs/shortcode/zitaly_food_regirvition_information.php";





