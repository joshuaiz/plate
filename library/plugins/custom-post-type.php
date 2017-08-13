<?php
/**
* Plugin Name: Template Staff CPT
* Description: Staff CPT sample for Template theme
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

******************************************************************/


// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'template_flush_rewrite_rules' );

// Flush your rewrite rules
function template_flush_rewrite_rules() {
	flush_rewrite_rules();
}


// Register Custom Post Type
function template_staff_cpt() {

	$labels = array(
		'name'                  => _x( 'Staff', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Staff', 'text_domain' ),
		'name_admin_bar'        => __( 'Staff', 'text_domain' ),
		'archives'              => __( 'Staff Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Staff:', 'text_domain' ),
		'all_items'             => __( 'All Staff', 'text_domain' ),
		'add_new_item'          => __( 'Add New Staff', 'text_domain' ),
		'add_new'               => __( 'Add New Staff', 'text_domain' ),
		'new_item'              => __( 'New Staff', 'text_domain' ),
		'edit_item'             => __( 'Edit Staff', 'text_domain' ),
		'update_item'           => __( 'Update Staff', 'text_domain' ),
		'view_item'             => __( 'View Staff', 'text_domain' ),
		'search_items'          => __( 'Search Staff', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into staff', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this staff', 'text_domain' ),
		'items_list'            => __( 'Staff list', 'text_domain' ),
		'items_list_navigation' => __( 'Staff list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter staff list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'staff',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Staff', 'text_domain' ),
		'description'           => __( 'TEMPLATE Staff', 'text_domain' ),
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
	);
	register_post_type( 'template_staff', $args );

}
add_action( 'init', 'template_staff_cpt', 0 );


// Register Custom Taxonomy
function template_staff_grouping_tax() {

	$labels = array(
		'name'                       => _x( 'Groupings', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Grouping', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Groupings', 'text_domain' ),
		'all_items'                  => __( 'All Groupings', 'text_domain' ),
		'parent_item'                => __( 'Parent Grouping', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Grouping:', 'text_domain' ),
		'new_item_name'              => __( 'New Grouping Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Grouping', 'text_domain' ),
		'edit_item'                  => __( 'Edit Grouping', 'text_domain' ),
		'update_item'                => __( 'Update Grouping', 'text_domain' ),
		'view_item'                  => __( 'View Grouping', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate groupings with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove groupings', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Groupings', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Groupings list', 'text_domain' ),
		'items_list_navigation'      => __( 'Groupings list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'grouping', array( 'template_staff' ), $args );

}

add_action( 'init', 'template_staff_grouping_tax', 0 );


// Change the 'Title' field text on edit screen
function template_staff_change_title_text( $title ){
     $screen = get_current_screen();
 
     if  ( 'template_staff' == $screen->post_type ) {
          $title = 'Full Name (First Last)';
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'template_staff_change_title_text' );


// Add sortable admin columns dopeness
add_filter("manage_edit-template_staff_sortable_columns", 'template_staff_sort');

function template_staff_sort($columns) {
   $custom = array(
       'taxonomy-grouping' => 'taxonomy-grouping'
   );
   return wp_parse_args($custom, $columns);
}


?>