<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'metabox'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Gallery Image', 'theone'),
        'options'   =>array(
            'theone_portfolio_gallery'    =>array(
                'type'  => 'multi-upload',
                'label' => false,
                'context'   => 'side',
                'priority'  => 'low',
                'images_only' => true,
                'desc'  => esc_html__( 'Select all images together and get them in the gallery. NB: Gallery images can only be seen on the detail page.', 'theone'),
            ),
        ),
    ),
    'metaboxes'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Portfolio Info', 'theone'),
        'options'   =>array(
            'theone_portfolio_info'    =>array(
                'type'  => 'addable-popup',
                'label' => esc_html__( 'Add Info', 'theone'),
                'sortable' => true,
                'template' => '{{- title }}',
                'add-button-text'   => esc_html__('Add New', 'theone'),
                'popup-options' => array(
                    'title' => array(
                        'type'  => 'text',
                        'label' => esc_html__( 'Info Title', 'theone'),
                    ),
                    'info' => array(
                        'type'  => 'text',
                        'label' => esc_html__( 'Info', 'theone'),
                    ),
                    'icon' => array(
                        'type'  => 'icon-v2',
                        'label' => esc_html__('Info Icon', 'theone'),
                    ),
                ),
            ),
        ),
    ),

);