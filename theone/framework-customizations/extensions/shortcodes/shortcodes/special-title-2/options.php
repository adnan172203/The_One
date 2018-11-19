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
    'theone_section_font_style' => array(
        'type'  => 'typography-v2',
        'label'   => esc_html__( 'Title Font Style', 'theone' ),
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
    'theone_section_sub_font_style' => array(
        'type'  => 'typography-v2',
        'label'   => esc_html__( 'Sub Title Font Style', 'theone' ),
        'value' => array(
            'size'   => 36,
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
    'theone_section_sub_text_tf'  => array(
        'type'    => 'short-select',
        'label'   => esc_html__( 'Sub Title Text Transform', 'theone' ),
        'value'   => 'capitalize',
        'choices' => array(
            'uppercase' => 'Uppercase',
            'capitalize' => 'Capitalize',
        ),
    ), 
    'theone_section_title_padding'    => array(
        'type'  => 'slider',
        'value' => 5,
        'properties' => array(
            'min' => 0,
            'max' => 10,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
           
        ),
        'label' => esc_html__('Padding Between Title and Sub-title', 'theone'),
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
    'theone_section_title_margin_bottom'    => array(
        'type'  => 'slider',
        'value' => 50,
        'properties' => array(
            //'min' => 0,
            //'max' => 100,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
           
        ),
        'label' => esc_html__('Margin bottom', 'theone'),
    ),
);