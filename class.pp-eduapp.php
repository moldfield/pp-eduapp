<?php

if(!class_exists('PP_Eduapp'))
{
	class PP_Eduapp
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once( PP_EDUAPP__PLUGIN_DIR . 'settings.php' );
			$PP_EduApp_Settings = new PP_EduApp_Settings();

			// Register custom post types
			require_once( PP_EDUAPP__PLUGIN_DIR . 'post_types/student-post-type.php' );
			$Post_Type_Template = new Post_Type_Template();

			// Configure Plugin Settings link that shows on plugin page
			$plugin = plugin_basename(__FILE__);
			add_filter( "plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
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
			$settings_link = '<a href="options-general.php?page=PP_Eduapp">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
		/**
		* Create Tables on init
		*/
		public function install () {

		}
	} // END class PP_EduApp
} // END if(!class_exists('PP_EduApp'))

if(class_exists('PP_Eduapp'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('PP_Eduapp', 'activate'));
	register_deactivation_hook(__FILE__, array('PP_Eduapp', 'deactivate'));
	// instantiate the plugin class
	$PP_Eduapp = new PP_Eduapp();
}