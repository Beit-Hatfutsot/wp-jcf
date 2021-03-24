<?php
/**
 * Configuration
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// theme version is used to register styles and scripts
if ( function_exists('wp_get_theme') ) :

	$theme_data = wp_get_theme();
	$theme_version = $theme_data->get('Version');

else :

	$theme_data = get_theme_data( trailingslashit(get_stylesheet_directory()).'style.css' );
	$theme_version = $theme_data['Version'];

endif;

define( 'VERSION', $theme_version );

// other
define( 'TEMPLATE',		get_stylesheet_directory_uri() );
define( 'HOME',			home_url( '/' ) );
define( 'CSS_DIR',		TEMPLATE . '/assets/css' );