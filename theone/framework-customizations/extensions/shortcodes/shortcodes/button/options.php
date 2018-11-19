<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_button_title'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Button Title', 'theone'),
        'desc'  => esc_html__( 'Write the btuuon title', 'theone')
    ), 
    'theone_button_link'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Button link', 'theone'),
        'desc'  => esc_html__( 'Insert btuuon URL', 'theone')
    ), 
    'theone_button_text_align' => array(
        'type'  => 'switch',
        'value' => 'center',
        'label' => esc_html__('Centered', 'theone'),
        'desc'  => esc_html__('Choose your button align', 'theone'),
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