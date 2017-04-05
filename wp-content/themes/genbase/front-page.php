<?php

/**
* Front Page Template
*
* @package		genbase
* @author 		Teague Nelson
* @link 		http://www.teaguenelson.com/
* @copyright 	copyright (c) 2017, Teague Nelson
*/

add_action( 'genesis_meta', 'genbase_front_page_setup' );

/**
* Check to see if widget areas are active to save from loading if not.
*
* @since 1.0.0
*/
function genbase_front_page_setup() {
	$home_sidebars = array (
		'home-hero-section' => is_active_sidebar( 'home-hero-section' )
	);

	// Return early if no sidebars are active
	if ( ! in_array( true, $home_sidebars )) {
		return;
	}

	// Add home-hero-section if Home Hero widget area is active
	if ( $home_sidebars['home-hero-section'] ) {
		add_action( 'genesis_after_header', 'genbase_add_home_hero_section' );
	}

}

/**
* Display content for the home hero section
*
* @since 1.0.0
*/
function genbase_add_home_hero_section() {
	genesis_widget_area( 'home-hero-section',
		array(
			before => '<div class="home-hero"><div class="home-hero-wrap">',
			after => '</div></div>'
		)
	);
}

genesis();