<?php

/**
* theme customizations
*
* @package		genbase
* @author 		Teague Nelson
* @link 		http://www.teaguenelson.com/
* @copyright 	copyright (c) 2017, Teague Nelson
*/

load_child_theme_textdomain( 'genbase' );

add_action( 'genesis_setup', 'genbase_setup', 15 );

// Add afer hero widget area.
add_action( 'genesis_after_header', 'genbase_after_header_widget_area' );

// Display featured image within post
add_action( 'genesis_before_entry', 'featured_post_image' );
function featured_post_image() {
  	if ( ! is_singular( 'post' ) )  return;
	the_post_thumbnail('post-image');
}

// Enques the JS script for mobile nav
// Based on Robin Cornett's solution for mobile menu
// https://robincornett.com/genesis-responsive-menu/
// Required Scripts and Styles
add_action( 'wp_enqueue_scripts', 'leaven_load_scripts', 15 );
function leaven_load_scripts() {
	// Responsive Navigation
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );
	wp_enqueue_script( 'leaven-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );
	$output = array(
		'mainMenu' => __( 'Menu', 'leaven' ),
		'subMenu'  => __( 'Menu', 'leaven' ),
	);
	wp_localize_script( 'leaven-responsive-menu', 'LeavenL10n', $output );
}

/**
* theme setup
*
* Attach all of the site-wide functions to the correct hooks and filters. 
* All the functions themselves are defined below this setup function.
* 
* @since 1.0.0
*/

function genbase_setup() {

	// define theme constants.
	define( 'CHILD_THEME_NAME', 'genbase' );
	define( 'CHILD_THEME_URL', 'https://github.com/teaguecnelson/genbase' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Add html5 markup structure.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Add viewport metatag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	// Add theme support for accessability.
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Add support for custom header.
	add_theme_support( 'custom-header', array(
		'width'           => 600,
		'height'          => 160,
		'header-selector' => '.site-title a',
		'header-text'     => false,
		'flex-height'     => true,
	) );

	// Add theme support for footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );
	
	// Unregister layouts that use a secondary sidebar. 
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	genesis_unregister_layout( 'sidebar-content' );

	// Unregister secondary sidebar. 
	unregister_sidebar( 'sidebar-alt' );

	// Add theme widget areas.
	include_once( get_stylesheet_directory() . '/includes/widget_areas.php' );

	// Customize the footer credits
	Add_filter( 'genesis_footer_creds_text', 'custom_footer_creds_text' );
	function custom_footer_creds_text() {
		$creds = 'SleepSurroundings [footer_copyright] &middot; All Rights Reserved';
		return $creds;
	}

	// Add after_header_widget_area
	function genbase_after_header_widget_area() {
		genesis_widget_area( 'after-header-widget-area',
			array(
				//
			)
		);
	}

}







