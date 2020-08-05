<?php
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Smashing Plugin to the latest version.
	Version: 3.1.0
	Tested: 5.4.2
	Author: XavierB
	Author URI: https://www.entertainaholic.com/
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'ziyaad30' );
$updater->set_repository( 'smashing-plugin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
	

// Register the fields
function smashing_register_settings() {
	add_option( 'smashing_option_apikey', '');
	add_option( 'smashing_option_check', '');
	register_setting( 'smashing_options_group', 'smashing_option_apikey', 'smashing_callback' );
	register_setting( 'smashing_options_group', 'smashing_option_check', 'smashing_callback' );
}
add_action( 'admin_init', 'smashing_register_settings' );

// Register the options/settings page
function smashing_register_options_page() {
	add_menu_page('Smashing Dashboard', 'Smashing Dashboard', 'manage_options', 'smashing', 'smashing_options_page');
}
add_action('admin_menu', 'smashing_register_options_page');

// The options/settings page
function smashing_options_page()
{
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	echo 'Smashing Options Page!';
}
