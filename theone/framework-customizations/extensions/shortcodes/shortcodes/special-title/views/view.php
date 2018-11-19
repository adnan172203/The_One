<?php 
$theone_section_title = '';
$theone_section_subtitle = '';

$font_style = '';
$text_transform = '';

$text_align = '';

$subtitle_color = '';
if (!defined('FW')) die('Access Forbidden');

    $theone_section_title = isset($atts['theone_section_title']) ? $atts['theone_section_title'] : '';
    $theone_section_subtitle = isset($atts['theone_section_subtitle']) ? $atts['theone_section_subtitle'] : '';
    //Section Title styling
    $theone_section_title_style_picker = isset($atts['theone_section_title_style_picker']) ? $atts['theone_section_title_style_picker'] : '';
    $theone_section_title_style = $theone_section_title_style_picker['theone_section_title_style_switch'];
    $font_style = $theone_section_title_style_picker['on']['theone_section_font_style'];
    $text_transform = $theone_section_title_style_picker['on']['theone_section_text_tf'];
    //Section Sub Title color
    $theone_section_sub_title_style_picker = isset($atts['theone_section_sub_title_style_picker']) ? $atts['theone_section_sub_title_style_picker'] : '';
    $theone_section_sub_title_style = $theone_section_sub_title_style_picker['theone_section_sub_title_style_switch'];
    $subtitle_color = $theone_section_sub_title_style_picker['on']['theone_section_subtitle_color'];
    //Section Text align
    $text_align = isset($atts['theone_section_text_align']) ? $atts['theone_section_text_align'] : '';

?>
<div class="section-heading" style=" text-align: <?php echo esc_attr($text_align); ?>">
    <?php if ( ! empty($theone_section_title)): ?>
        <h2 <?php if($theone_section_title_style == 'on'): ?> style=" <?php echo theone_title_font_style($font_style); ?> text-transform: <?php echo esc_attr($text_transform);  ?>;"<?php endif; ?>>
            <?php echo esc_html($theone_section_title ); ?>
        </h2>
    <?php endif ?>

    <?php if ( ! empty($theone_section_subtitle)): ?>
        <p <?php if ( $theone_section_sub_title_style == 'on' ): ?>
                style=" color:<?php echo esc_attr($subtitle_color); ?>;"
            <?php endif ?>>
            <?php echo esc_html($theone_section_subtitle ); ?>
        </p>
    <?php endif ?>

</div>