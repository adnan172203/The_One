<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_counter_two_title'     =>array(
        'type'  => 'text',
        'label' => esc_html__( 'Counter Title', 'theone'),
    ),
    'theone_counter_two_counting'      =>array(
        'type'  => 'text',
        'label' => esc_html__( 'Counting number', 'theone'),
        'desc'  => esc_html__( 'Input only numbers', 'theone'),
    ),
    'theone_counter_two_numerals'      =>array(
        'type'  => 'text',
        'label' => esc_html__( 'Counting Numeration', 'theone'),
        'desc'  => esc_html__( 'Input Counting Numeration, for example: K, K+, B, B+, M, M+ etc', 'theone'),
    ),
);