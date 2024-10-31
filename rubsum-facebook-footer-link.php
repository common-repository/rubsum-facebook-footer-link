<?php 
/**
* Plugin Name: RubSum Facebook Footer Link
* Description: Ads a Facebook Profile link to the end of posts
* Version: 1.0
* Author: Rubel's on behalf of RubSum
* Author URI: http://facebook.com/rubelbdp
*
**/

// Exit if Accessed Directly

if(!defined('ABSPATH')){
	exit;
}

// Global Options Variable
$rsffl_options = get_option('rsffl_settings');

// Load Scripts


require_once(plugin_dir_path(__FILE__).'/includes/rubsum-facebook-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/rubsum-facebook-footer-link-content.php');

if(is_admin()){

// Load Settings
require_once(plugin_dir_path(__FILE__).'/includes/rubsum-facebook-footer-link-settings.php');
}
