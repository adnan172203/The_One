<?php 
$theone_feature_title = '';
$theone_feature_desc = '';
$theone_feature_flat_icon = '';
$theone_feature_icon = '';
$theone_feature_style = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_feature_title = isset($atts['theone_feature_title']) ? $atts['theone_feature_title'] : '';
    $theone_feature_desc = isset($atts['theone_feature_desc']) ? $atts['theone_feature_desc'] : '';
    $theone_feature_flat_icon = isset($atts['theone_feature_flat_icon']) ? $atts['theone_feature_flat_icon'] : '';
    $theone_feature_icon = isset($atts['theone_feature_icon']) ? $atts['theone_feature_icon'] : '';
    $theone_feature_style = isset($atts['theone_feature_style']) ? $atts['theone_feature_style'] : '';
?>

<div class="feature-element <?php if ($theone_feature_style == 'yes'){ echo esc_html('feature style-three');
}?>">
    <div class="feature-thumb">
        <?php if ( !empty($theone_feature_flat_icon) ): ?>
            <img src="<?php echo esc_url($theone_feature_flat_icon['url']); ?>">
        <?php else: ?>
            <i class="<?php echo esc_attr( $theone_feature_icon['icon-class']); ?>"></i>
        <?php endif ?>
    </div>
    <div class="feature-content">
        <h4><?php echo esc_html( $theone_feature_title );  ?></h4>
        <p><?php echo wp_kses_post($theone_feature_desc);  ?></p>
    </div>
</div>