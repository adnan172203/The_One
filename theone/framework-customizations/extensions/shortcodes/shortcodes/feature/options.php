<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_feature_title'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Feature Title', 'theone'),
        'desc'  => esc_html__( 'Write the feature title', 'theone')
    ), 
    'theone_feature_desc'  => array(
        'type'  => 'textarea',
        'label' => esc_html__( 'Description', 'theone'),
        'desc'  => esc_html__( 'Write the feature description content', 'theone')
    ), 
    'theone_feature_flat_icon'  => array(
        'type'  => 'upload',
        'label' => esc_html__( 'Flat Icon', 'theone'),
        'desc'  => esc_html__( 'Icon', 'theone')
    ), 
    'theone_feature_icon'  => array(
        'type'  => 'icon-v2',
        'label' => esc_html__( 'Font-Awesome Icon', 'theone'),
        'desc'  => esc_html__( 'Icon', 'theone')
    ), 
    'theone_feature_style' => array(
        'type'  => 'switch',
        'value' => 'no',
        'label' => esc_html__('Icon With Border', 'theone'),
        'left-choice' => array(
            'value' => 'no',
            'label' => esc_html__('No', 'theone'),
        ),
        'right-choice' => array(
            'value' => 'yes',
            'label' => esc_html__('Yes', 'theone'),
        ),
    ),

);