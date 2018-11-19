<?php 
$theone_slider_style_one = '';
if (!defined('FW')) die('Access Forbidden');

	$theone_slider_style_one = isset($atts['theone_slider_style_one']) ? $atts['theone_slider_style_one'] : '';
?>

<div class="banner style-two row">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <?php
            $i = 0;
            $j = 0;
            if(!empty($theone_slider_style_one)):
            $slideCount = count($theone_slider_style_one);
            ?>
            <ol class="carousel-indicators">
                <?php foreach ($theone_slider_style_one as $slider): ?>
                <li data-target="#main-slider" data-slide-to="<?php echo $i; ?>" class="<?php echo ($j == '0') ? 'active' : ''; ?>"></li>
                <?php  $i++;$j++; endforeach; ?>  
            </ol>
            <?php endif; ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

            <?php
            $k = 0;
            if(!empty($theone_slider_style_one)):
                foreach ($theone_slider_style_one as $slider): $k++;
                    $slider_img_url = $slider['image'];
                    $slider_texts = $slider['slider_text'];
                    $button_text    = $slider['btntext'];
                    $btntext_2    = $slider['btntext_2'];
                    $button_url   = $slider['btnurl'];
                    $btnurl_2   = $slider['btnurl_2'];
            ?>  
                <div class="item style-<?php 
                    switch ($k) {
                    case '1':
                        echo "one";
                        break;
                    case '2':
                        echo "two";
                        break;
                    case '3':
                        echo "three";
                        break;
                    default:
                        echo "one";
                        break;
                 } ?> <?php echo ($k == '1') ? 'active' : ''; ?>" style="background-image: url(<?php if(!empty($slider['image'])){echo esc_url($slider_img_url['url']); }?>);">
                    <div class="banner-element">
                        <div class="container">
                            <div class="">
                                <div class="banner-content">
                                    <?php foreach ($slider_texts as $slider_text): 
                                        $heading = isset($slider_text['size']) ?  $slider_text['size'] : 'h2';
                                        $slider_font_style = isset($slider_text['color']) ?  $slider_text['color'] : '';

                                    ?>
                                        <<?php echo esc_html($heading);?> style=" color: <?php echo !empty($slider_font_style) ? esc_attr($slider_font_style) : ''; ?>" >
                                            <?php echo esc_html($slider_text['text'] ); ?>
                                        </<?php echo esc_html($heading);?>>
                                    <?php endforeach; ?>
                                    <?php if ( !empty($button_text) ): ?>
                                        <a href="<?php echo !empty($button_url) ? esc_url($button_url) : ''; ?>" class="custom-btn btn-one"><?php echo !empty($button_text) ? esc_html($button_text) : ''; ?></a> 
                                    <?php endif; ?>
                                    <?php if ( !empty($btntext_2) ): ?>
                                        <a href="<?php echo !empty($btnurl_2) ? esc_url($btnurl_2) : ''; ?>" class="custom-btn btn-two"><?php echo !empty($btntext_2) ? esc_html($btntext_2) : ''; ?></a> 
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>