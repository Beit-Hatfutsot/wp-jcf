<?php
/**
 * Admin header functions
 *
 * @author		Nir Goldberg
 * @package		functions/admin
 * @version		1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * JCF_login_screen
 *
 * This function tweaks login screen
 *
 * @param	N/A
 * @return	N/A
 */
function JCF_login_screen() {

	wp_enqueue_style( 'admin-login' );

}
add_action( 'login_head', 'JCF_login_screen' );

/**
 * JCF_login_logo_url
 *
 * This function tweaks login header URL
 *
 * @param	N/A
 * @return	(string)
 */
function JCF_login_logo_url() {

	// return
	return HOME;

}
add_filter( 'login_headerurl', 'JCF_login_logo_url' );

/**
 * JCF_login_logo_url_title
 *
 * This function tweaks login header title
 *
 * @param	N/A
 * @return	(string)
 */
function JCF_login_logo_url_title() {

	// return
	return get_bloginfo( 'name' );

}
add_filter( 'login_headertitle', 'JCF_login_logo_url_title' );