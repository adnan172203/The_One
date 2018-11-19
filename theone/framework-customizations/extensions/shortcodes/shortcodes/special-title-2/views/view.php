<?php 
$theone_section_title = '';
$theone_section_subtitle = '';
$font_style = '';
$sub_font_style = '';
$text_transform = '';
$sub_text_transform = '';
$text_align = '';
$padding_bottom = '';
$margin_bottom = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_section_title = isset($atts['theone_section_title']) ? $atts['theone_section_title'] : '';
    $theone_section_subtitle = isset($atts['theone_section_subtitle']) ? $atts['theone_section_subtitle'] : '';
    $font_style = isset($atts['theone_section_font_style']) ? $atts['theone_section_font_style'] : '';
    $sub_font_style = isset($atts['theone_section_sub_font_style']) ? $atts['theone_section_sub_font_style'] : '';
    $text_transform = isset($atts['theone_section_text_tf']) ? $atts['theone_section_text_tf'] : '';
    $sub_text_transform = isset($atts['theone_section_sub_text_tf']) ? $atts['theone_section_sub_text_tf'] : '';
    $text_align = isset($atts['theone_section_text_align']) ? $atts['theone_section_text_align'] : '';
    $padding_bottom = isset($atts['theone_section_title_padding']) ? $atts['theone_section_title_padding'] : '';
    $margin_bottom = isset($atts['theone_section_title_margin_bottom']) ? $atts['theone_section_title_margin_bottom'] : '';
?>
<div class="section-heading-2" style=" text-align: <?php echo esc_attr($text_align); ?>; margin-bottom: <?php echo esc_attr($margin_bottom).'px'; ?>">
    <?php if ( ! empty($theone_section_title)): ?>                 
        <h2 style=" <?php echo theone_title_font_style($font_style); ?> text-transform: <?php echo esc_attr($text_transform);?>; padding-bottom: <?php echo esc_attr($padding_bottom).'px';?>; "><?php echo esc_html($theone_section_title ); ?></h2>
    <?php endif;?>
    <?php if ( ! empty($theone_section_subtitle)): ?>
        <h3  style=" <?php echo theone_title_font_style($sub_font_style); ?> text-transform: <?php echo esc_attr($sub_text_transform);?>;"><?php echo esc_html($theone_section_subtitle ); ?></h3>
    <?php endif;?>
</div>