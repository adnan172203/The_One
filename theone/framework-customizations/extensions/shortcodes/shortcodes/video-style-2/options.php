<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_video_link'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Video link', 'theone'),
        'desc'  => esc_html__( 'Insert Video URL to embed this video', 'theone')
    ), 
    'theone_video_bg'  => array(
        'type'  => 'upload',
        'label' => esc_html__( 'Background Image', 'theone'),
    ), 
 

);