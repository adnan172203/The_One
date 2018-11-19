<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_address_title'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Title', 'theone'),
        'desc'  => esc_html__( 'Write the title', 'theone'),
        'value'  => esc_html__( 'Our Location', 'theone'),
    ), 
    'theone_address_details'  => array(
        'type'  => 'textarea',
        'label' => esc_html__( 'Details', 'theone'),
        'desc'  => esc_html__( 'Write the address details', 'theone'),
    ), 
    'theone_address_icon'  => array(
        'type'  => 'icon-v2',
        'label' => esc_html__( 'Icon', 'theone'),
        'desc'  => esc_html__( 'Choose an icon', 'theone'),
    ), 
);