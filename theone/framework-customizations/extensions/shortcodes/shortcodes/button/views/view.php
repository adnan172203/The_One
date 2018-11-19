<?php 
$theone_button_title = '';
$theone_button_link = '';
$theone_button_text_align = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_button_title = isset($atts['theone_button_title']) ? $atts['theone_button_title'] : '';
    $theone_button_link = isset($atts['theone_button_link']) ? $atts['theone_button_link'] : '';
    $theone_button_text_align = isset($atts['theone_button_text_align']) ? $atts['theone_button_text_align'] : '';
?>
<div class="project-btn" style=" text-align: <?php echo esc_attr($theone_button_text_align); ?>">
    <a href="<?php echo esc_url($theone_button_link); ?>" class="custom-btn"><?php echo esc_html($theone_button_title); ?></a>
</div>