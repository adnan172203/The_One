<?php 
$limit= '';
$theone_service_thumbnail= '';
$order= '';
$orderby= '';
$postfrom= '';
$category= '';
$tag= '';
if (!defined('FW')) die('Access Forbidden');
    $limit= isset($atts['theone_service_post_count']) ? $atts['theone_service_post_count'] : '';
    $theone_service_thumbnail= isset($atts['theone_service_thumbnail']) ? $atts['theone_service_thumbnail'] : '';
    $order= isset($atts['theone_service_order']) ? $atts['theone_service_order'] : '';
    $orderby= isset($atts['theone_service_orderby']) ? $atts['theone_service_orderby'] : '';
    //Post from...
    $theone_service_multi_picker= isset($atts['theone_service_multi_picker']) ? $atts['theone_service_multi_picker'] : '';
    $postfrom = !empty($theone_service_multi_picker['post_from']) ? $theone_service_multi_picker['post_from'] : '';
    $category = !empty($theone_service_multi_picker['category']['cats']) ? $theone_service_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_service_multi_picker['tags']['tag']) ? $theone_service_multi_picker['tags']['tag'] : '';
?>

<div class="section-wrapper row <?php if ( $theone_service_thumbnail == 'yes'){echo esc_html('service style-three');}?>">
    <?php
        $service_query = theone_service_query($limit,$postfrom,$category,$tag,$order,$orderby);
        if( $service_query->have_posts() ): while( $service_query->have_posts() ): $service_query->the_post();
            $theone_service_icon = fw_get_db_post_option( get_the_ID(), 'theone_service_icon');
     ?>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-element">
                <div class="service-thumb">
                    <?php if ($theone_service_thumbnail == 'yes'): ?>
                        <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('theone-360-315'); ?></a>
                    <?php else: ?>
                        <?php if(!empty($theone_service_icon['url'])): ?>
                            <span><img src="<?php echo !empty($theone_service_icon['url']) ? esc_url($theone_service_icon['url']) : ''; ?>"/></span>
                        <?php else: ?>
                            <span class="service-icon"><i class="<?php echo !empty($theone_service_icon['icon-class']) ? esc_attr($theone_service_icon['icon-class']) : '' ; ?>" aria-hidden="true"></i></span>
                        <?php endif; ?>
                    <?php endif ?>
                </div>
                <div class="service-content">
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php echo wp_trim_words( get_the_content(), 14, '' ); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile;
        wp_reset_postdata();
     endif; ?>
</div>