<?php
/*
Plugin Name: Padma Revolution Slider
Plugin URI: https://www.padmaunlimited.com/plugins/shortcode-block
Description: Padma Revolution Slider Compatibility Block
Version: 1.0.9
Author: Padma Unlimited
Author URI: https://www.padmaunlimited.com/
License: GNU GPL v2
*/


add_action('after_setup_theme', function(){

    if ( !class_exists('Padma') )
		return;

    if ( !class_exists('RevSlider') )
		return;

	require_once 'block-options.php';
	
	if (!class_exists('PadmaBlockAPI') )
		return false;

	$class = 'PadmaSliderRevolution';
	$block_type_url = substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1);		
	$class_file = __DIR__ . '/block.php';
	$icons = array(
			'path' => __DIR__,
			'url' => $block_type_url
		);

	padma_register_block(
		$class,
		$block_type_url,
		$class_file,
		$icons
	);

	/**
	 *
	 * Check if there is the Padma Loader
	 *
	 */		
	if ( version_compare(PADMA_VERSION, '1.1.70', '<=') ){			
		include_once $class_file;
	}


});
