<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'metabox'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Services', 'theone'),
        'options'   =>array(
            'theone_service_icon'     =>array(
                'type'          => 'icon-v2',
                'label'         => esc_html__('Service Icon:', 'theone')
            ),
            'theone_service_gallery'    =>array(
                'type'  => 'multi-upload',
                'label' => esc_html__('Service Gallary:', 'theone'),
                'context'   => 'side',
                'priority'  => 'low',
                'images_only' => true,
                'desc'  => esc_html__( 'Select all images together and get them in the gallery. NB: Gallery images can only be seen on the detail page.', 'theone'),
            ),
            'theone_service_download_title'   =>array(
                'type'  => 'text',
                'label' => esc_html__( 'Download Title', 'theone'),
                'value' => esc_html__( 'DOWNLOAD BROCHURES', 'theone'),
            ),
            'theone_service_download_pdf'   =>array(
                'type'  => 'text',
                'label' => esc_html__( 'PDF file link', 'theone'),
            ),
            'theone_service_download_zip'   =>array(
                'type'  => 'text',
                'label' => esc_html__( 'ZIP file link', 'theone'),
            ),
        ),
    ),
);