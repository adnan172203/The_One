<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'metabox'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Pricing Details', 'theone'),
        'options'   =>array(
            'theone_pricing_currency_icon'  => array(
                'type'  => 'icon-v2',
                'label' => esc_html__('Currency Icon', 'theone'),
                'desc' => esc_html__('Use FontAwesome Icons only.', 'theone'),
            ),
            'theone_pricing_pack_price'  => array(
                'type'  => 'text',
                'label' => esc_html__('Package Price', 'theone'),
            ),
            'theone_pricing_pack_details'  => array(
                'type'  => 'addable-box',
                'label' => esc_html__('Package Details', 'theone'),
                'add-button-text' => esc_html__('Add Packege Details', 'theone'),
                'sortable' => true,
                'template' => ' {{- details }}',
                'box-options' => array(
                    'details'   => array(
                        'type'  => 'text',
                        'label' => esc_html__( 'Package Info', 'theone'),
                    ),
                    'availablity'   => array(
                        'type'  => 'switch',
                        'value' => 'yes',
                        'label' => esc_html__('Availablity', 'theone'),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => esc_html__('No', 'theone'),
                        ),
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__('Yes', 'theone'),
                        ),
                    )
                ),
            ),
            'theone_pricing_payment_url'  => array(
                'type'  => 'text',
                'label' => esc_html__('Payment Link', 'theone')
            ),
            'theone_pricing_payment_btn'  => array(
                'type'  => 'text',
                'label' => esc_html__('Button Text', 'theone')
            ),
        ),
    ),
);