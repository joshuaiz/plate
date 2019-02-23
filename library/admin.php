<?php
/*------------------------------------
 * Theme: Plate by studio.bio 
 * File: Admin custom functions
 * Author: Joshua Michaels
 * URI: https://studio.bio/themes/plate
 *------------------------------------
 *
 * This file handles the admin area and functions.
 * You can use this file to make changes to the
 * dashboard and other adminifications.
 *
 */

/*********************
REMOVE DASHBOARD WIDGETS
Clean up the Dashboard, yo.
*********************/

/*
Eddie's old function wasn't working on some widgets so I've updated it
This cleans up a lot of the widgets on the Dashboard page. If you want
to have any of these back, comment them out.
*/


add_action('wp_dashboard_setup', 'plate_remove_dashboard_widgets');

function plate_remove_dashboard_widgets() {

    remove_meta_box('dashboard_quick_press','dashboard','side'); // Quick Press widget
    remove_meta_box('dashboard_recent_drafts','dashboard','side'); // Recent Drafts
    remove_meta_box('dashboard_primary','dashboard','side'); // WordPress.com Blog
    remove_meta_box('dashboard_secondary','dashboard','side'); // Other WordPress News
    remove_meta_box('dashboard_incoming_links','dashboard','normal'); // Incoming Links
    remove_meta_box('dashboard_plugins','dashboard','normal'); // Plugins
    remove_meta_box('dashboard_right_now','dashboard', 'normal'); // Right Now
    remove_meta_box('rg_forms_dashboard','dashboard','normal'); // Gravity Forms
    remove_meta_box('dashboard_recent_comments','dashboard','normal'); // Recent Comments
    remove_meta_box('icl_dashboard_widget','dashboard','normal'); // Multi Language Plugin
    remove_meta_box('dashboard_activity','dashboard', 'normal'); // Activity
    remove_action('welcome_panel','wp_welcome_panel'); // WP Welcome

}

/*********************
CUSTOM LOGIN PAGE
Customize it, we don't criticize it.
*********************/

// calling your own login css so you can style it

// Updated to proper 'enqueue' method
// http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function plate_login_css() {
	wp_enqueue_style( 'plate_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function plate_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function plate_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'plate_login_css', 10 );
add_filter( 'login_headerurl', 'plate_login_url' );
add_filter( 'login_headertitle', 'plate_login_title' );


/*********************
CUSTOMIZE ADMIN
Customize it, and I'll advertise it.
*********************/

/*
I don't really recommend editing the admin too much
as things may get wonky if WordPress updates. Here
are a few functions which you can choose to use if
you like.
*/


// Load admin-specific styles. Edit in admin.scss.
function plate_admin_css() {
    wp_enqueue_style( 'plate_admin_css', get_template_directory_uri() . '/library/css/admin.css', false );
}
add_action( 'admin_enqueue_scripts', 'plate_admin_css', 10 );


// Custom Backend Footer
// adding it to the admin area
add_filter( 'admin_footer_text', 'plate_custom_admin_footer' );

function plate_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="https://studio.bio" target="_blank">studio.bio</a></span>. Built using <a href="https://studio.bio/themes/plate" target="_blank">Plate</a>.', 'platetheme' );
}

?>