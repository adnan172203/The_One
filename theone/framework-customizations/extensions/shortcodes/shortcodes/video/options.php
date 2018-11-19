<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    'theone_video_title'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Video Title', 'theone'),
        'desc'  => esc_html__( 'Write the video title', 'theone')
    ), 
    'theone_video_link'  => array(
        'type'  => 'text',
        'label' => esc_html__( 'Video link', 'theone'),
        'desc'  => esc_html__( 'Insert Video URL to embed this video', 'theone')
    ),  

);