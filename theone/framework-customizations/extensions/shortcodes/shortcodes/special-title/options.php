<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_section_title'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Section Title', 'theone'),
        'desc'  => esc_html__( 'Write the heading title content', 'theone')
    ), 
    'theone_section_subtitle'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Section Sub Title', 'theone'),
        'desc'  => esc_html__( 'Write the heading subtitle content', 'theone')
    ), 
    'theone_section_title_style_picker' => array(
        'type'  => 'multi-picker',
        'label' => false,
        'picker' => array(
            //Sec title Settings
            'theone_section_title_style_switch' => array(
                'type'  => 'switch',
                'value' => 'off',
                'label' => esc_html__('Title Styles', 'theone'),
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
                'theone_section_font_style' => array(
                    'type'  => 'typography-v2',
                    'label'   => __( 'Title Font Style', 'theone' ),
                    'value' => array(
                        'size'   => 40,
                        'line-height' => 1.2,
                        'color'  => '#000000'
                    ),  
                    'components' => array(
                        'family' => false,
                        'letter-spacing' => false,
                        'size'   => true,
                        'color'  => true
                    ),   
                ),
                'theone_section_text_tf'  => array(
                    'type'    => 'short-select',
                    'label'   => esc_html__( 'Title Text Transform', 'theone' ),
                    'value'   => 'capitalize',
                    'choices' => array(
                        'uppercase' => 'Uppercase',
                        'capitalize' => 'Capitalize',
                    ),
                ), 
            ),  
        ),
    ),
    'theone_section_sub_title_style_picker' => array(
        'type'  => 'multi-picker',
        'label' => false,
        'picker' => array(
            //Breadcrumb Settings
            'theone_section_sub_title_style_switch' => array(
                'type'  => 'switch',
                'value' => 'off',
                'label' => esc_html__('Sub Title Styles', 'theone'),
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
                'theone_section_subtitle_color' => array(
                    'type'  => 'color-picker',
                    'value'   => '#696969',
                    'label' => esc_html__( 'Subtitle Color', 'theone'),
                ),
            ),  
        ),
    ),
    'theone_section_text_align' => array(
        'type'  => 'switch',
        'value' => 'center',
        'label' => esc_html__('Centered', 'theone'),
        'desc'  => esc_html__('Choose your text align', 'theone'),
        'left-choice' => array(
            'value' => 'left',
            'label' => esc_html__('No', 'theone'),
        ),
        'right-choice' => array(
            'value' => 'center',
            'label' => esc_html__('Yes', 'theone'),
        ),
    ),
);