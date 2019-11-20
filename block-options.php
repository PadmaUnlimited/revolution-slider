<?php

class PadmaSliderRevolutionOptions extends PadmaBlockOptionsAPI {

	public $tabs;
	public $sets;
	public $inputs;

	function __construct($block_type_object){

		parent::__construct($block_type_object);

		$this->tabs = array(
			'general' => 'General'
		);

		$this->sets = array(

		);

		$this->inputs = array(
			'general' => array(
				'alias' => array(
					'type' => 'select',
					'name' => 'alias',
					'label' => 'Select Slider',
					'options' => 'get_slides()',
					'tooltip' => '',
				),
			)
		);

	}

	public function modify_arguments($args = false) {
	}
	
	public function get_slides() {


		$slider = new RevSlider();		
		$sliders = array('no-slide' => 'Select an slider');		

		if( method_exists('RevSlider', 'getAllSliderForAdminMenu') ){
			
			$data = $slider->getAllSliderForAdminMenu();
			foreach ($data as $key => $params) {
				$sliders[ $params['alias'] ] = $params['title'];
			}

		}elseif( method_exists('RevSlider', 'get_slider_for_admin_menu') ){
			
			$data = $slider->get_slider_for_admin_menu();
			foreach ($data as $key => $params) {
				$sliders[ $params['alias'] ] = $params['title'];
			}
		
		}else{			
			return;
		}


		return $sliders;
	}
}