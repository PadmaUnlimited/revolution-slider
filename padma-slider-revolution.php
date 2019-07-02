<?php
/*
Plugin Name: Padma Revolution Slider
Plugin URI: https://www.padmaunlimited.com/plugins/shortcode-block
Description: Padma Revolution Slider Compatibility Block
Version: 1.0.1
Author: Padma Unlimited
Author URI: https://www.padmaunlimited.com/
License: GNU GPL v2
*/


add_action('after_setup_theme', function(){

    if ( !class_exists('Padma') )
		return;

	require_once 'block.php';
	require_once 'block-options.php';
	
	if (!class_exists('PadmaBlockAPI') )
		return false;

	
	return padma_register_block('PadmaSliderRevolution', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1));

});
