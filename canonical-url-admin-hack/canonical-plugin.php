<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
	Plugin Name: Remove WP Canonical URL Admin Hack
	Description: WordPress plugin to remove canonical URLs from Admin Area.  useful for Reversed Proxie/Multi Site Installations.  Stops the wp_admin_canonical_url redirect in WP-Admin after 4.2 upgrade 
	Author: MrJamesMyers
	Version: 1.0.0
	Author URI: http://mrjamesmyers.co.uk
	Plugin URI: http://mrjamesmyers.co.uk
    License: GPLv2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


    global $wpdb;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    // Adding action to call my_plugin_init on plugin initialisation
    add_action('init', 'wp_canonical_hack_init');

    // Function to be called on plugin initialisation
    function wp_canonical_hack_init() {
        remove_action( 'admin_head', 'wp_admin_canonical_url' );
    }