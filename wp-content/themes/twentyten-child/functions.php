<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Put your custom code here.

// config
require_once('functions/config.php');

// scripts & styles
require_once('functions/scripts-n-styles.php');

// admin header section
require_once('functions/admin/header.php');	// should be outside is_admin() because of the login screen

// gtm
require_once('functions/gtm.php');