<?php 
$options = array(
    'theone_general_options' => array(
        'type' => 'tab',
        'title'=> esc_html__('General Settings', 'theone'),
        'options'   => array(
            // body typography 
            'theone_body_typography'    => array(
                'type'  => 'tab',
                'title' => esc_html__( 'General Settings', 'theone'),
                'options'   => array(
                    //theme general color
                    'theone_theme_color'    =>array(
                        'type'          => 'color-picker',
                        'value'          => '#459bef',
                        'label'          => esc_html__('Theme Color:', 'theone'),
                        'desc'          => esc_html__('Choose your theme color', 'theone'),
                    ),
                    //body background color
                    'theone_body_bg_color'  =>array(
                        'type'          => 'color-picker',
                        'value'          => '#FFFFFF',
                        'label'          => esc_html__('Background Color:', 'theone'),
                    ), 
                    //preeloader Switch
                    'theone_preloader_switch'  =>array(
                        'type'  => 'switch',
                        'value' => 'on',
                        'label' => esc_html__( 'Preloader', 'theone'),
                        'desc'  => esc_html__('If you want to turn off preloader then OFF the switch', 'theone'),
                        'left-choice' => array(
                            'value' => 'off',
                            'label' => esc_html__('OFF', 'theone'),
                        ),
                        'right-choice' => array(
                            'value' => 'on',
                            'label' => esc_html__('ON', 'theone'),
                        ),
                    ),
                    //preeloader Switch
                    'theone_scrol_to_top_switch'  =>array(
                        'type'  => 'switch',
                        'value' => 'on',
                        'label' => esc_html__( 'Scrol To Top', 'theone'),
                        'desc'  => esc_html__('If you want to turn off Scrol To Top then OFF the switch', 'theone'),
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
);