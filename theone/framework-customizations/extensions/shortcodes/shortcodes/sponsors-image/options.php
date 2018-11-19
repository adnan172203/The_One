<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_sponsor_image' =>array(
        'type'          => 'addable-popup',
        'label' => __('Add Sponsor Image', 'theone'),
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add Image', 'theone'),
        'sortable' => true,
        'template' => '{{- title }}',
        'popup-options' => array(
            'title'     =>array(
                'type'  => 'text',
                'label' => esc_html__( 'Company Title', 'theone'),
            ),
            'image'      =>array(
                'type'  => 'upload',
                'label' => esc_html__( 'Sponsor Image', 'theone'),
            ),
        ),        
    ), 
);