<?php

class PadmaSliderRevolutionOptions extends PadmaBlockOptionsAPI {

	public $tabs = array(
		'general' => 'General'
	);
	
	public $sets = array(
		
	);

	public $inputs = array(
		'general' => array(
			'alias' => array(
				'type' => 'select',
				'name' => 'alias',
				'label' => 'Select Slider',
				'options' => 'get_sliders()',
				'tooltip' => '',
			),
		)
	);
	
	function get_sliders() {

		
		$rev_slider = new RevSlider();

		$slider = array(
			'0' => 'Select a slider'
		);

		if( $data = $rev_slider->getAllSliderAliases()){
			
			foreach($data as $key => $alias){
				$slider[$alias] = $alias;
			}

		}
		
		return $slider;
	}
}