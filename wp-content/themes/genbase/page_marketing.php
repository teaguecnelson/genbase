<?php

/**
* Marketing Page Template
*
* Template Name: Marketing
* (This is all Pages that aren't posts or archive pages)
*
* @package		genbase
* @author 		Teague Nelson
* @link 		http://www.teaguenelson.com/
* @copyright 	copyright (c) 2017, Teague Nelson
*/

// Add marketing page body class to the head.
add_filter( 'body_class', 'genbase_add_body_class' );
function genbase_add_body_class( $classes ) {

	$classes[] = 'marketing-page';

	return $classes;

}

// Reposition page title info.
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_post_title' );

// Run the Genesis loop.
genesis();