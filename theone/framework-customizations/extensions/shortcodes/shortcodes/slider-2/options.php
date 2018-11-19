<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_slider_style_one'=>array(
        'type'  => 'addable-popup',
        'label' => esc_html__('Slider:', 'theone'),
        'add-button-text' => __('Add Slider', 'theone'),
        'popup-title' => __('Add New Slider', 'theone'),
        'sortable' => true,
        'popup-options' => array(
            'slider_text' =>array(
                'type'  => 'addable-popup',
                'label' => esc_html__('Slider Text', 'theone'),
                'add-button-text' => __('Add Text', 'theone'),
                'popup-title' => __('Add New Text', 'theone'),
                'sortable' => true,
                'template' => '{{- text }}',
                'popup-options' => array(
                    'text' => array(
                        'type'  => 'textarea',
                        'label' => esc_html__('Slider text', 'theone'),
                    ),
                    'size'  => array(
                        'type'    => 'short-select',
                        'label'   => __( 'Size', 'theone' ),
                        'desc'    => __( 'Choose the heading size, H1 being the largest', 'theone' ),
                        'value'   => 'h2',
                        'choices' => array(
                            'h1' => 'H1',
                            'h2' => 'H2',
                            'h3' => 'H3',
                        ),
                    ),
                    'color' => array(
                        'type'  => 'color-picker',
                        'label'   => __( 'Font Color', 'theone' ),
                        'value'     => '#ffffff'                    
                    ),
                ),
            ),
            'image' =>array(
                'type'  => 'upload',
                'label' => esc_html__('Slider Background', 'theone'),
            ),
            'btntext'   =>array(
                'type'  => 'text',
                'label' => esc_html__('Button Text', 'theone'),
            ),
            'btnurl'    =>array(
                'type'  => 'text',
                'label' => esc_html__('Button Link', 'theone'),
            ),
            'btntext_2'   =>array(
                'type'  => 'text',
                'label' => esc_html__('Second Button Text', 'theone'),
            ),
            'btnurl_2'    =>array(
                'type'  => 'text',
                'label' => esc_html__('Second Button Link', 'theone'),
            ),
        ),
    ),   
);