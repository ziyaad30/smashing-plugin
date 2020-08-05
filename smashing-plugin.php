<?php
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Smashing Plugin to the latest version.
	Version: 3.0.6
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
	

	
// Register the options/settings page
function smashing_options_page() {
	add_menu_page('Smashing Dashboard', 'Smashing Dashboard', 'manage_options', 'smashing-plugin', 'smashing_options_page');
}
add_action('admin_menu', 'smashing_options_page');


// The options/settings page
function smashing_options_page()
{
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	echo 'The Smashing options page!';
}
