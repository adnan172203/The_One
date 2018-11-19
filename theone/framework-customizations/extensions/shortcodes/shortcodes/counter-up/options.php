<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_counter_up' =>array(
        'type'          => 'addable-popup',
        'label' => __('Add Counter', 'theone'),
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add New Counter', 'theone'),
        'sortable' => true,
        'template' => '{{- title }}',
        'popup-options' => array(
            'title'     =>array(
                'type'  => 'text',
                'label' => esc_html__( 'Counter Title', 'theone'),
            ),
            'counting'      =>array(
                'type'  => 'text',
                'label' => esc_html__( 'Counting number', 'theone'),
                'desc'  => esc_html__( 'Input only numbers', 'theone'),
            ),
            'numerals'      =>array(
                'type'  => 'text',
                'label' => esc_html__( 'Counting Numeration', 'theone'),
                'desc'  => esc_html__( 'Input Counting Numeration, for example: K, K+, B, B+, M, M+ etc', 'theone'),
            ),
        ),
    ),
);