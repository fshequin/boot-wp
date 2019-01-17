<?php
/**
 * Plugin Name:       BTC Functionality Plugin
 * Plugin URI:        http://btcny.com/btc-site-functionality/
 * Description:       This plugin is used to modularize non-theme specific functionality for your Wordpress site. Custom Post Types, Custom Taxonomies. Always leave this plugin activated or follow the instructions from BTC.
 * Version:           1.0.1
 * Author:            Fred Shequine
 * Author URI:        http://btcny.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       btc_site_functionality
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

// link in the lib files

	//require WP_PLUGIN_DIR.'/btc_site_functionality/libs/post_types.php';
	//require WP_PLUGIN_DIR.'/btc_site_functionality/libs/taxonomies.php';

	//add_action('init', 'require_boot_metaboxes');  // old cmb class // (don't use, conflicts with Royal Slider *js problem* FGS 1-16-2019)
	//add_action('init', 'require_boot_cmb2_metaboxes'); // new cmb2 class  // (don't use, conflicts with Royal Slider *js problem* FGS 1-16-2019)

	/**
	 * Initialize the old CMB metabox class.
	 */
	function require_boot_metaboxes() {
	    require WP_PLUGIN_DIR.'/btc_site_functionality/libs/metaboxes.php';

	    if( !class_exists('cmb_Meta_Box'))
	    {
	        require WP_PLUGIN_DIR.'/btc_site_functionality/libs/metabox/init.php';
	    }
	}
	/**
	 * Initialize the CMB2 metabox class.
	 */

	function require_boot_cmb2_metaboxes() {
		require WP_PLUGIN_DIR.'/btc_site_functionality/libs/metaboxes_cmb2.php';
		require WP_PLUGIN_DIR.'/btc_site_functionality/libs/theme_options_cmb2.php'; // uncomment to activate
	}

	// cmb2 plugin - cmb2-attached-posts-field

	//require WP_PLUGIN_DIR.'/btc_site_functionality/libs/cmb2-attached-posts-example.php'; // uncomment to activate
