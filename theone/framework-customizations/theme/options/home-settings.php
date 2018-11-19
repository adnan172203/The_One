<?php
$options = array(
    'home_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Blog/Home Settings', 'theone'),
        'options' => array(
            //Excerpt Option
            'theone_content_settings'   => array(
                'type'  => 'tab',
                'title' => esc_html__( 'Blog Post Settings', 'theone'),
                'options'   => array(
                    //Content excerpt picker
                    'theone_content_excerpt_picker' => array(
                        'type'  => 'multi-picker',
                        'lable' => false,
                        'desc'  => false,
                        'picker'=> array(
                            //Excerpt On/Off
                            'theone_excerpt_switch' => array(
                                'type'  => 'switch',
                                'label' => esc_html__( 'Content excerpt', 'theone'),
                                'desc'  => esc_html__('If you want to turn off content excerpt then OFF the switch', 'theone'),
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
                                //Excerpt word limit
                                'theone_excerpt_limit'  => array(
                                    'type'  => 'text',
                                    'value' => 45,
                                    'label' => esc_html__('Excerpt word limit:', 'theone'),
                                    'desc'  => esc_html__('Number Only', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),   
    ),	    
);