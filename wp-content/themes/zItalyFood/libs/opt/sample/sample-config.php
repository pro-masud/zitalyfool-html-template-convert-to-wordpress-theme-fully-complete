<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'sumon';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'submenu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => false,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => false,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => false,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => false,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => false,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => false,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);


// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
// PLEASE CHANGE THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => __( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => __( 'Support', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => __( 'Extensions', 'your-textdomain-here' ),
);


// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
}



Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START SECTIONS

 */
Redux::set_section($opt_name, [
	'title'					=> 'Header Section Settings',
]);

Redux::set_section($opt_name,[
		'title'			=> '<h5 style="margin:0px; padding:0px;">Topbar Information</h5>',
		'id'			=> 'tbc',
		'icon'			=> 'el el-css',
		'subsection'	=> true,
		'fields'		=> [
			[
				'title'			=> 		'Phone Number',
				'type'			=> 		'text',
				'id'			=> 		'pn',
				'default'		=> 		'0171002898'
			],
			[
				'title'			=> 	'Email',
				'type'			=> 	'text',
				'id'			=> 	'emails',
				'default'		=> 	'freelancermannan114@gmail.com'
			]
		]
]);


Redux::set_section($opt_name,[
		'title'			=> 'Social Media Links',
		'id'			=> 'sml',
		'icon'			=> 'el el-css',
		'subsection'	=> true,
		'fields'		=> [
			[
				'title'			=> 		'Twitter',
				'type'			=> 		'text',
				'id'			=> 		'tw',
				'default'		=> 		'#'
			],
			[
				'title'			=> 	'Facebook',
				'type'			=> 	'text',
				'id'			=> 	'fb',
				'default'		=> 	'#'
			],
			[
				'title'			=> 	'Email',
				'type'			=> 	'text',
				'id'			=> 	'email',
				'default'		=> 	'#'
			],
			[
				'title'			=> 	'Linkedin',
				'type'			=> 	'text',
				'id'			=> 	'lin',
				'default'		=> 	'#'
			],
			[
				'title'			=> 	'Instagram',
				'type'			=> 	'text',
				'id'			=> 	'inta',
				'default'		=> 	'#'
			]
		]
]);


Redux::set_section($opt_name,[
		'title'			=> 'Logo Customization',
		'id'			=> 'logo_cus',
		'icon'			=> 'el el-css',
		'subsection'	=> true,
		'fields'		=> [
			[
				'title'			=> 		'Logo',
				'type'			=> 		'media',
				'id'			=> 		'logo',
				'url'			=> 		false,
			],
			[
				'title'			=> 		'Favicon Logo',
				'type'			=> 		'media',
				'id'			=> 		'logofiv',
				'url'			=>		'false',
			],

			[
				'title'			=> 		'Header Text',
				'type'			=> 		'textarea',
				'id'			=> 		'heard_text',
			]
		]

]);


Redux::set_section($opt_name,[
	'title'			=> 'Front Page Options',
	'id'			=> 'fpo',
	'icon'			=> 'el el-group',
	'subsection'	=> true,
	'fields'		=> [
		[
			'title'			=> 'Front Page Text',
			'type'			=> 'textarea',
			'id'			=> 'fpt'

		],
		[
			'title'			=> 'Front Page Subtext',
			'type'			=> 'textarea',
			'id'			=> 'fpst'
		]



	]




]);



Redux::set_section($opt_name,[
	'title'				=> 'Footer Section',
	'id'				=> 'fs',
	'icon'				=> 'el el-edit',
	'fields'			=> [
		[
			'title'				=> 'Theme Create By',
			'type'				=> 'editor',
			'id'				=> 'tcb',
			'default'			=> 	'This Theme Create By md Masud Rana',


		],

		[
			'title'				=> 'Footer Button Text 1',
			'type'				=> 'text',
			'id'				=> 'fbt',
			'default'			=> 	'Privacy Policy'
		],

		[
			'title'				=> 'Booter Button Link 1',
			'type'				=> 'text',
			'id'				=> 'bbll',
			'default'			=> 	'#'

		],

		[
			'title'				=> 'Footer Button Text 2',
			'type'				=> 'text',
			'id'				=> 'fbt',
			'default'			=> 	'Terms of Use'



		],

		[
			'title'				=> 'Booter Button Link 2',
			'type'				=> 'text',
			'id'				=> 'bbl',
			'default'			=> 	'#'



		]






	]



]);






