<?php
/**
* Plugin Name: Plate Staff CPT
* Description: Staff CPT sample for Plate theme
* Version: 1.0
* Author: Joshua Michaels for studio.bio
* Author URI: https://studio.bio/
*/

/******************************************************************
A PLUGIN? IN MY THEME?
*******************************************************************
Wait a minute there buddy, what is a plugin file doing in a theme?

Well think about it...in most cases whatever site you're working
on will need your CPT to work with or without your theme. You may
not be the dev in 5 years time but they will still need their data.

Thus, it makes sense to put each custom post type in a plugin. This
is an example of a 'Staff' custom post type and includes its own
taxonomy 'Grouping' plus some functions to change the 'Title' field
on edit screens and make the admin columns sortable.

You *could* edit this file to make your own CPT. But it's even easier
to just go to https://generatewp.com and use the Post Type Generator
and the Taxonomy Generator there. That's what I do.

Edit this or replace your own code from generatewp.com and then place
in the /wp-content/plugins folder and activate it like any other
plugin. Sweetness.

** And yes, I know having this file in the theme gives an error in
Theme Check. Big whoop.

******************************************************************/


// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'plate_flush_rewrite_rules' );

// Flush your rewrite rules
function plate_flush_rewrite_rules() {
	flush_rewrite_rules();
}


// Register Custom Post Type
function plate_staff_cpt() {

	$labels = array(
		'name'                  => _x( 'Staff', 'Post Type General Name', 'platetheme' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'platetheme' ),
		'menu_name'             => __( 'Staff', 'platetheme' ),
		'name_admin_bar'        => __( 'Staff', 'platetheme' ),
		'archives'              => __( 'Staff Archives', 'platetheme' ),
		'parent_item_colon'     => __( 'Parent Staff:', 'platetheme' ),
		'all_items'             => __( 'All Staff', 'platetheme' ),
		'add_new_item'          => __( 'Add New Staff', 'platetheme' ),
		'add_new'               => __( 'Add New Staff', 'platetheme' ),
		'new_item'              => __( 'New Staff', 'platetheme' ),
		'edit_item'             => __( 'Edit Staff', 'platetheme' ),
		'update_item'           => __( 'Update Staff', 'platetheme' ),
		'view_item'             => __( 'View Staff', 'platetheme' ),
		'search_items'          => __( 'Search Staff', 'platetheme' ),
		'not_found'             => __( 'Not found', 'platetheme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'platetheme' ),
		'featured_image'        => __( 'Featured Image', 'platetheme' ),
		'set_featured_image'    => __( 'Set featured image', 'platetheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'platetheme' ),
		'use_featured_image'    => __( 'Use as featured image', 'platetheme' ),
		'insert_into_item'      => __( 'Insert into staff', 'platetheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this staff', 'platetheme' ),
		'items_list'            => __( 'Staff list', 'platetheme' ),
		'items_list_navigation' => __( 'Staff list navigation', 'platetheme' ),
		'filter_items_list'     => __( 'Filter staff list', 'platetheme' ),
	);
	$rewrite = array(
		'slug'                  => 'staff',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Staff', 'platetheme' ),
		'description'           => __( 'Plate Staff', 'platetheme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions', 'page-attributes', ),
		'taxonomies'            => array( 'grouping' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		// You can change the base request here
		//'rest_base'             => 'staff',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'plate_staff', $args );

}
add_action( 'init', 'plate_staff_cpt', 0 );


// Register Custom Taxonomy
function plate_staff_grouping_tax() {

	$labels = array(
		'name'                       => _x( 'Groupings', 'Taxonomy General Name', 'platetheme' ),
		'singular_name'              => _x( 'Grouping', 'Taxonomy Singular Name', 'platetheme' ),
		'menu_name'                  => __( 'Groupings', 'platetheme' ),
		'all_items'                  => __( 'All Groupings', 'platetheme' ),
		'parent_item'                => __( 'Parent Grouping', 'platetheme' ),
		'parent_item_colon'          => __( 'Parent Grouping:', 'platetheme' ),
		'new_item_name'              => __( 'New Grouping Name', 'platetheme' ),
		'add_new_item'               => __( 'Add New Grouping', 'platetheme' ),
		'edit_item'                  => __( 'Edit Grouping', 'platetheme' ),
		'update_item'                => __( 'Update Grouping', 'platetheme' ),
		'view_item'                  => __( 'View Grouping', 'platetheme' ),
		'separate_items_with_commas' => __( 'Separate groupings with commas', 'platetheme' ),
		'add_or_remove_items'        => __( 'Add or remove groupings', 'platetheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'platetheme' ),
		'popular_items'              => __( 'Popular Items', 'platetheme' ),
		'search_items'               => __( 'Search Groupings', 'platetheme' ),
		'not_found'                  => __( 'Not Found', 'platetheme' ),
		'no_terms'                   => __( 'No items', 'platetheme' ),
		'items_list'                 => __( 'Groupings list', 'platetheme' ),
		'items_list_navigation'      => __( 'Groupings list navigation', 'platetheme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'show_in_rest'               => true,
		// You can change the base request here
		//'rest_base'                  => 'grouping',
		'rest_controller_class'      => 'WP_REST_Terms_Controller',
	);
	register_taxonomy( 'grouping', array( 'plate_staff' ), $args );

}

add_action( 'init', 'plate_staff_grouping_tax', 0 );


// Change the 'Title' field text on edit screen
function plate_staff_change_title_text( $title ){
    $screen = get_current_screen();

    if  ( 'plate_staff' == $screen->post_type ) {
        $title = 'Full Name (First Last)';
    }

    return $title;
}

add_filter( 'enter_title_here', 'plate_staff_change_title_text' );


// Add sortable admin columns dopeness
add_filter("manage_edit-plate_staff_sortable_columns", 'plate_staff_sort');

function plate_staff_sort($columns) {
    $custom = array(
        'taxonomy-grouping' => 'taxonomy-grouping'
    );
    return wp_parse_args($custom, $columns);
}


?>