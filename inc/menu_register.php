<?php 

/**
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

 // Menu Register
 register_nav_menu('primary',__( 'Primary Menu', 'travel_agency' ) );
 

 //Featured Image
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );