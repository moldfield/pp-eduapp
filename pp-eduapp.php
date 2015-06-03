<?php
/*
Plugin Name: Part Pixel Eduapp
Plugin URI: http://fyaconiello.github.com/wp-plugin-template
Description: A plugin for teachers, students and parents
Version: 1.0
Author: Part Pixel
Author URI: http://www.partpixelstudio.com
License: GPL2
*/
/*
Copyright 2015 Matthew Oldfield  (email : matt@partpixelstudio.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/ 
add_action('admin_menu', 'pp_plugin_activation');

function pp_plugin_activation () {
	add_role( 'custom_role', 'Teacher', array( 'read' => true, 'level_0' => true ) );

	// Menu
	add_menu_page( 'EduApp Page', 'EduApp', 'manage_options', 'edu-app', 'test_init' );

	// Add Student Custom Post Type
	pp_student();
}  // End pp_plutin_activation();

register_activation_hook( __FILE__, 'pp_plugin_activation' );

// Register Custom Post Type
function pp_student() {

	$labels = array(
		'name'                => _x( 'Students', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Student', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Student', 'text_domain' ),
		'name_admin_bar'      => __( 'Student', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Student:', 'text_domain' ),
		'all_items'           => __( 'All Students', 'text_domain' ),
		'add_new_item'        => __( 'Add New Student', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Studnet', 'text_domain' ),
		'edit_item'           => __( 'Edit Student', 'text_domain' ),
		'update_item'         => __( 'Update Student', 'text_domain' ),
		'view_item'           => __( 'View Student', 'text_domain' ),
		'search_items'        => __( 'Search Student', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'pp-student', 'text_domain' ),
		'description'         => __( 'Student Post Type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'pp-student', $args );

}

// Hook into the 'init' action
add_action( 'init', 'pp_student', 0 );
?>