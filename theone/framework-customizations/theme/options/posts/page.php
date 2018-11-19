<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'metabox' => array(
        'type' => 'box',
        'title' => esc_html__('Custom Page Settings', 'theone'),
        'options' => array(
            //Page Header
            'theone_breadcrumb_picker'  => array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker' => array(
                    //Breadcrumb Settings
                    'theone_braeadcrumb_switch' => array(
                        'type'  => 'switch',
                        'value' => 'on',
                        'label' => esc_html__('Breadcrumb', 'theone'),
                        'desc'  => esc_html__('ON/OFF Breadcrumb', 'theone'),
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
                'choices'   => array(
                    'on'    => array(
                        //Page Header BG
                        'image' => array(
                            'type'  => 'upload',
                            'label' => esc_html__( 'Breadcrumb Background', 'theone'),
                            'desc'  => esc_html__( 'Upload Breadcrumb Background', 'theone'),
                            'images_only' => true,
                        ),
                        //Page Header BG-color
                        'color' => array(
                            'type'  => 'rgba-color-picker',
                            'value' => 'rgba(59,85,230,0.8)',
                            'label' => esc_html__('Background Color','theone'),

                        ),
                        'padding-top'   => array(
                            'type'  => 'slider',
                            'value' => 40,
                            'label' => esc_html__('Padding top','theone'),
                            'properties' => array(
                                'min' => 0,
                                'max' => 250,
                                'step' => 5, // Set slider step. Always > 0. Could be fractional.  
                            ),
                        ),
                        'padding-bottom'    => array(
                            'type'  => 'slider',
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
            //
            //Custom Header Style
            'theone_page_header_style_picker' =>array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker'=> array(
                    //Header Style switch
                    'theone_page_header_style_switch'   => array(
                        'type'  => 'switch',
                        'label' => esc_html__('Custom Header', 'theone'),
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
                'choices'   =>array(
                    'on'    =>array(
                        //Tranceparent Menu
                        'theone_transparent_menu_switch'    =>array(
                            'type'  => 'switch',
                            'value' => 'off',
                            'label' => esc_html__('Transeparent Menu', 'theone'),
                            'left-choice' => array(
                                'value' => 'off',
                                'label' => esc_html__('OFF', 'theone'),
                            ), 
                            'right-choice' => array(
                                'value' => 'on',
                                'label' => esc_html__('ON', 'theone'),
                            ), 
                        ),
                        //Tranceparent menu bg-color
                        'theone_menu_bg_color' => array(
                            'type'  => 'rgba-color-picker',
                            'value' => 'rgba(59,85,230,0.6)',
                            'label' => esc_html__('Background color', 'theone'),
                            'desc' => esc_html__('Will appear in transparent menu only', 'theone'),
                        ),
                        //minicart Switch
                        'theone_minicart_switch'  =>array(
                            'type'  => 'switch',
                            'value' => 'off',
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
            ),                         
        ),        
    ),    
);