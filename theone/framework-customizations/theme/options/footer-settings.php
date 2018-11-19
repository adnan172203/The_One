<?php
$options = array(
	'theone_footer_options' => array(
		'type' => 'tab',
		'title'=> esc_html__('Footer Settings', 'theone'),
		'options' => array(
			'theone_footer_top_picker'	=> array(
        		'type'	=> 'multi-picker',
			    'label' => false,
			    'desc'  => false,
			    'picker' => array(
					//Footer top option
					'theone_footer_top_switch'	=> array(
						'type'	=> 'switch',
						'value'	=> 'on',
						'label'	=> esc_html__( 'Footer Top', 'theone'),
						'desc'	=> esc_html__('If you want to turn off top footer then OFF the switch', 'theone'),
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
			    //Footer Top background
			    'choices'	=> array(
			    	'on'	=> array(
			    		'theone_top_footer_bg_color'	=> array(
			    			'type'	=> 'color-picker',
			    			'value'	=> '#1b222b;',
			    			'label'	=> esc_html__( 'Background Color', 'theone'),
			    		),
			    	),
			    ),
			),

			//Footer Bottom Picker 
        	'theone_footer_bottom_picker'	=> array(
        		'type'	=> 'multi-picker',
			    'label' => false,
			    'desc'  => false,
			    'picker' => array(
					//Footer Bottom option
					'theone_footer_bottom_switch'	=> array(
						'type'	=> 'switch',
						'value'	=> 'on',
						'label'	=> esc_html__( 'Footer bottom', 'theone'),
						'desc'	=> esc_html__('If you want to turn off footer bottom then OFF the switch', 'theone'),
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
				//Footer Copyright
	            'choices'	=> array(
	            	'on'	=> array(
	            		'theone_footer_copyright'=> array(
	            			'type'	=> 'textarea',
	            			'label'	=> esc_html__( 'Footer Copyright', 'theone'),
	            			'desc'	=> esc_html__( 'Footer Copyright', 'theone'),
	            		),
	            		'theone_footer_bg'	=> array(
	            			'type'	=> 'color-picker',
			    			'value'	=> '#353e4a;',
	            			'label'	=> esc_html__( 'Background Color', 'theone'),
	            		),
	            	),	
	            ),
            ),
		),
	),

);