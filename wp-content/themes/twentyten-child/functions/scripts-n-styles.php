<?php
/**
 * Scripts and Styles
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * JCF_login_scripts_n_styles
 *
 * This function registers login screen scripts and styles
 *
 * @param	N/A
 * @return	N/A
 */
function JCF_login_scripts_n_styles() {

	wp_register_style( 'admin-login',	CSS_DIR . '/admin/login.css',	array(),	VERSION );

}
add_action('login_enqueue_scripts', 'JCF_login_scripts_n_styles');