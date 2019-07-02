<?php 

class PadmaSliderRevolution extends PadmaBlockAPI {

    public $id 				= 'slider-revolution';    
    public $name 			= 'Slider Revolution';
    public $options_class 	= 'PadmaSliderRevolutionOptions';
    public $categories 		= array('content','slider', 'media');
    
    public function init() {

		if(!class_exists('RevSlider'))
			return false;

	}
			
	function setup_elements() {

	}

	function content($block) {
		
		$alias = parent::get_setting($block, 'alias', '');		
		echo do_shortcode('[rev_slider alias="'.$alias.'"]');
		
	}
	
}