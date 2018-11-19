<?php 
$theone_video_link = '';
$theone_video_bg = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_video_link = isset($atts['theone_video_link']) ? $atts['theone_video_link'] : '';
    $theone_video_bg = isset($atts['theone_video_bg']) ? $atts['theone_video_bg'] : '';
?>

<div class="row">
    <div class="our-video" style= "background-image: url(<?php echo esc_url($theone_video_bg['url']); ?>); ">
        <div class="overlay-effect"></div>
        <div class="video-element">
            <div class="video-content">
                <a href="<?php echo esc_url($theone_video_link); ?>" data-rel="lightcase"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
</div>