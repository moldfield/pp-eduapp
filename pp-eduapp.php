<?php
/*
Plugin Name: Part Pixel Eduapp
Plugin URI: http://fyaconiello.github.com/wp-plugin-template
Description: A plugin for teachers, students and parents
Version: 0.0.1
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

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
// Define some useful constants
define( 'PP_EDUAPP_VERSION', '0.0.1' );
define( 'PP_EDUAPP__MINIMUM_WP_VERSION', '3.2' );
define( 'PP_EDUAPP__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PP_EDUAPP__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'PP_Eduapp', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'PP_Eduapp', 'plugin_deactivation' ) );

require_once( PP_EDUAPP__PLUGIN_DIR . 'settings.php' );
require_once( PP_EDUAPP__PLUGIN_DIR . 'class.pp-eduapp.php' );
require_once( PP_EDUAPP__PLUGIN_DIR . 'class.pp-eduapp-admin.php' );

if ( is_admin() ) {
	require_once( PP_EDUAPP__PLUGIN_DIR . 'class.pp-eduapp-admin.php' );
	add_action( 'init', array( 'PP_Eduapp_Admin', 'init' ) );
}