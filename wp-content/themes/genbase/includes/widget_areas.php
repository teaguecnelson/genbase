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
'name'          => __( 'Home Hero', 'genbase' ),
'description'   => __( 'This is a widget area that will show on the front page', 'genbase' ),
) );