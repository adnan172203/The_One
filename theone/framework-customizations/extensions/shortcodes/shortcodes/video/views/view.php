<?php 
$theone_video_title = '';
$theone_video_link = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_video_title = isset($atts['theone_video_title']) ? $atts['theone_video_title'] : '';
    $theone_video_link = isset($atts['theone_video_link']) ? $atts['theone_video_link'] : '';
?>

<div class="video row">
    <div class="video-element">
        <div class="video-content">
            <div class="overlay-effect"></div>
            <a href="<?php echo esc_url($theone_video_link); ?>" data-rel="lightcase"><i class="fa fa-play"></i></a>
           <h2><?php echo esc_html($theone_video_title); ?></h2>
        </div>
    </div>
</div>