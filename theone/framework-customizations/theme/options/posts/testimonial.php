<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'theone_testi_metabox'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Client Details', 'theone'),
        'options'   =>array(
            'theone_client_image'   =>array(
                'type'          => 'upload',
                'label'         => esc_html__( 'Profile Picture:', 'theone')
            ),
        ),
    ),
);