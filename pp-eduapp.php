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



if(!class_exists('PP_EduApp'))
{
	class PP_EduApp
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$PP_EduApp_Settings = new PP_EduApp_Settings();
			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();
			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct
		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate
		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate
		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=PP_EduApp">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
	} // END class PP_EduApp
} // END if(!class_exists('PP_EduApp'))
if(class_exists('PP_EduApp'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('PP_EduApp', 'activate'));
	register_deactivation_hook(__FILE__, array('PP_EduApp', 'deactivate'));
	// instantiate the plugin class
	$PP_EduApp = new PP_EduApp();
}