<?php
$options = array(
	'theone_header_options' => array(
		'type' => 'tab',
		'title'=> esc_html__('Header Settings', 'theone'),
		'options' => array(
			//Header Style settings
			'theone_header_style_setup'	=> array(
				'type'	=> 'tab',
				'title'	=> esc_html__( 'Header Style', 'theone'),
				'options'=> array(
					//Header Style
					'theone_transparent_menu_picker' => array(
						'type'	=> 'multi-picker',
						'lable'	=> false,
						'desc'	=> false,
						'picker'=> array(
		                    //Tranceparent Menu
		                    'theone_transparent_menu_switch'    =>array(
		                        'type'  => 'switch',
		                        'value' => 'off',
		                        'label' => esc_html__('Tranceparent Menu', 'theone'),
		                        'left-choice' => array(
		                            'value' => 'off',
		                            'label' => esc_html__('OFF', 'theone'),
		                        ), 
		                        'right-choice' => array(
		                            'value' => 'on',
		                            'label' => esc_html__('ON', 'theone'),
		                        ), 
		                    ), 
						),
	                    'choices'	=> array(
	                    	'on'	=> array(
			                    //Tranceparent menu bg-color
			                    'theone_menu_bg_color' => array(
			                        'type'  => 'rgba-color-picker',
			                        'value' => 'rgba(69,155,239,0.6)',
			                        'label' => esc_html__('Background color', 'theone'),
			                    ),
	                    	),
	                    ),
					),
					//minicart Switch
                    'theone_minicart_switch'  =>array(
                        'type'  => 'switch',
                        'label' => esc_html__( 'Minicart', 'theone'),
                        'desc'  => esc_html__('If you want to turn off minicart then OFF the switch', 'theone'),
                        'value' => 'on',
                        'left-choice' => array(
                            'value' => 'off',
                            'label' => esc_html__('OFF', 'theone'),
                        ),
                        'right-choice' => array(
                            'value' => 'on',
                            'label' => esc_html__('ON', 'theone'),
                        ),
                    ),
				),
			),
			//logo settings
			'theone_logo_settings' => array(
				'type' => 'tab',
				'title' => esc_html__('Identity', 'theone'),
				'options' => array(
					//Desktop Logo
					'theone_header_logo'	=> array(
						'type'	=> 'upload',
						'label'	=> esc_html__( 'Desktop Logo', 'theone'),
						'images_only' => true,
					),
					//Light Desktop Logo
					'theone_trn_header_logo'	=> array(
						'type'	=> 'upload',
						'label'	=> esc_html__( 'Light Desktop Logo', 'theone'),
						'desc'	=> esc_html__( 'Upload logo for light header style', 'theone'),
						'images_only' => true,
					),
					'theone_logo_padding_picker'	=> array(
						'type'	=> 'multi-picker',
						'lable'	=> false,
						'desc'	=> false,
						'picker'=> array(
		                    //Logo padding
		                    'theone_Logo_padding_switch'    =>array(
		                        'type'  => 'switch',
		                        'value' => 'off',
		                        'label' => esc_html__('Padding', 'theone'),
		                        'left-choice' => array(
		                            'value' => 'off',
		                            'label' => esc_html__('OFF', 'theone'),
		                        ), 
		                        'right-choice' => array(
		                            'value' => 'on',
		                            'label' => esc_html__('ON', 'theone'),
		                        ), 
		                    ), 
						),
	                    'choices'	=> array(
	                    	'on'	=> array(
			                    //Padding Top
			                    'top' => array(
			                        'type'  => 'slider',
			                        'value' => 0,
			                        'label' => esc_html__('Padding top', 'theone'),
			                    ),
			                    //Padding right
			                    'right' => array(
			                        'type'  => 'slider',
			                        'value' => 0,
			                        'label' => esc_html__('Padding right', 'theone'),
			                    ),
			                    //Padding bottom
			                    'bottom' => array(
			                        'type'  => 'slider',
			                        'value' => 0,
			                        'label' => esc_html__('Padding bottom', 'theone'),
			                    ),
			                    //Padding left
			                    'left' => array(
			                        'type'  => 'slider',
			                        'value' => 0,
			                        'label' => esc_html__('Padding left', 'theone'),
			                    ),
	                    	),
	                    ),
					),
					//Desktop Logo Width
					'theone_header_logo_width'	=> array(
						'type'	=> 'slider',
					    'value' => 130,
					    'properties' => array(
					        'max' => 250,
							'step' => 1,
					    ),
					    'label' => esc_html__('Desktop Logo Width', 'theone'),
					),
					//Light Desktop Logo Width
					'theone_trn_header_logo_width'	=> array(
						'type'	=> 'slider',
					    'value' => 130,
					    'properties' => array(
					        'max' => 250,
							'step' => 1,
					    ),
					    'label' => esc_html__('Light Desktop Logo Width', 'theone'),
					),
				),
			),
			//header settings
            'header_option' => array(
                'type' => 'tab',
                'title' => esc_html__('Breadcrumb', 'theone'),                
                'options' => array(
                	'theone_breadcrumb_picker'	=> array(
                		'type'	=> 'multi-picker',
					    'label' => false,
					    'desc'  => false,
					    'picker' => array(
		                    //Breadcrumb Settings
		                    'theone_braeadcrumb_switch'	=> array(
		                    	'type'	=> 'switch',
		                    	'value'	=> 'on',
		                    	'label'	=> esc_html__('Breadcrumb', 'theone'),
		                    	'desc'	=> esc_html__('ON/OFF Breadcrumb', 'theone'),
		                        'left-choice' => array(
		                            'value' => 'off',
		                            'label' => esc_html__('OFF', 'theone'),
		                        ), 
		                        'right-choice' => array(
		                            'value' => 'on',
		                            'label' => esc_html__('ON', 'theone'),
		                        ), 
		                    ),
		                ),
	                    'choices'	=> array(
	                    	'on'	=> array(
                                //Page Header BG
	                    		'image'	=> array(
	                    			'type'	=> 'upload',
	                    			'label'	=> esc_html__( 'Breadcrumb Background', 'theone'),
	                    			'desc'	=> esc_html__( 'Upload Breadcrumb Background', 'theone'),
	                    			'images_only' => true,
	                    		),
                                //Page Header BG-color
                                'color' => array(
                                    'type'  => 'rgba-color-picker',
                                    'value'	=> 'rgba(69,155,239,0.8)',
                                    'label' => esc_html__('Background Color','theone'),

                                ),
                                'padding-top'	=> array(
                                	'type'	=> 'slider',
                                	'value' => 40,
                                	'label' => esc_html__('Padding top','theone'),
								    'properties' => array(
								        'min' => 0,
								        'max' => 250,
								        'step' => 5, // Set slider step. Always > 0. Could be fractional.  
								    ),
                                ),
                                'padding-bottom'	=> array(
                                	'type'	=> 'slider',
                                	'value' => 40,
                                	'label' => esc_html__('Padding bottom','theone'),
								    'properties' => array(
								        'min' => 0,
								        'max' => 250,
								        'step' => 5, // Set slider step. Always > 0. Could be fractional.  
								    ),
                                ),
	                    	),	
	                    ),
                	),
                ),
            ),

		),
	),

);