<?php 
$theone_address_title = '';
$theone_address_details = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_address_title = isset($atts['theone_address_title']) ? $atts['theone_address_title'] : '';
    $theone_address_details = isset($atts['theone_address_details']) ? $atts['theone_address_details'] : '';
    $theone_address_icon = isset($atts['theone_address_icon']) ? $atts['theone_address_icon'] : '';
?>
<div class="template-contact">
    <div class="template-contact-left">
        <?php if ( $theone_address_icon['type'] == 'icon-font' ): ?>
            <i class="<?php echo !empty($theone_address_icon['icon-class']) ? esc_attr($theone_address_icon['icon-class']) : ''; ?>"></i>
        <?php elseif($theone_address_icon['type'] == 'custom-upload'): ?>
            <img src="<?php echo !empty($theone_address_icon['url']) ? esc_url($theone_address_icon['url']) : ''; ?>">
        <?php endif; ?>        
    </div>
    <div class="template-contact-right">
        <h6><?php echo !empty($theone_address_title) ? esc_html($theone_address_title) : ''; ?></h6>
        <span><?php echo !empty($theone_address_details) ? wp_kses_post($theone_address_details) : ''; ?></span>
    </div>
</div>