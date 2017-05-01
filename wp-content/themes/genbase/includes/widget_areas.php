<?php

/**
* Resgister Widget Areas
*
* @package		genbase
* @author 		Teague Nelson
* @link 		http://www.teaguenelson.com/
* @copyright 	copyright (c) 2017, Teague Nelson
*/

// Register front page widget areas. 
genesis_register_sidebar( array(
'id'            => 'home-hero-section',
'name'          => __( 'Front Page', 'genbase' ),
'description'   => __( 'This is a widget area that will show on the front page', 'genbase' ),
) );

// Register after-header-widget-area. 
genesis_register_sidebar( array(
	'id'			=> 'after-header-widget-area',
	'name'			=> __( 'After Header Widget Area', 'genbase' ),
	'description'	=> __( 'This is a widget area for after the site header.', 'genbase' ),
) );
