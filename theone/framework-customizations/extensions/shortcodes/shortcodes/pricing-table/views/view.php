<?php 
$limit= '';
$order= '';
$orderby= '';
$postfrom= '';
$category= '';
$tag= '';
if (!defined('FW')) die('Access Forbidden');
    $limit= isset($atts['theone_pricing_limit']) ? $atts['theone_pricing_limit'] : '';
    $theone_pricing_multi_picker= isset($atts['theone_pricing_multi_picker']) ? $atts['theone_pricing_multi_picker'] : '';
    $order= isset($atts['theone_pricing_order']) ? $atts['theone_pricing_order'] : '';
    $orderby= isset($atts['theone_pricing_orderby']) ? $atts['theone_pricing_orderby'] : '';
    $postfrom = !empty($theone_pricing_multi_picker['post_from']) ? $theone_pricing_multi_picker['post_from'] : '';
    $category = !empty($theone_pricing_multi_picker['category']['cats']) ? $theone_pricing_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_pricing_multi_picker['tags']['tag']) ? $theone_pricing_multi_picker['tags']['tag'] : '';
?>


<div class="section-wrapper row">
    <?php $pricing_post = theone_pricing_query ($limit,$postfrom,$category,$tag,$order,$orderby);
        if($pricing_post->have_posts()):while($pricing_post->have_posts()): $pricing_post->the_post();
        //metabox data
        $theone_pricing_currency_icon = fw_get_db_post_option( get_the_ID(), 'theone_pricing_currency_icon');
        $theone_pricing_pack_price = fw_get_db_post_option( get_the_ID(), 'theone_pricing_pack_price');
        $theone_pricing_pack_duration = fw_get_db_post_option( get_the_ID(), 'theone_pricing_pack_duration');
        $theone_pricing_pack_details = fw_get_db_post_option( get_the_ID(), 'theone_pricing_pack_details');
        $theone_pricing_payment_url = fw_get_db_post_option( get_the_ID(), 'theone_pricing_payment_url');
        $theone_pricing_payment_btn = fw_get_db_post_option( get_the_ID(), 'theone_pricing_payment_btn');
     ?>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="pricing-element">
            <div class="pricing-heading">
                <h2><?php the_title(); ?></h2>
                <span><sup><i class="<?php echo !empty($theone_pricing_currency_icon['icon-class']) ? esc_attr($theone_pricing_currency_icon['icon-class']) : ''; ?>" aria-hidden="true"></i></sup><?php echo !empty($theone_pricing_pack_price) ? esc_html($theone_pricing_pack_price) : ''; ?></span>
            </div>
            <ul class="pricing-details">
                <?php foreach ($theone_pricing_pack_details as $details): ?>
                    <li>
                        <?php if ($details['availablity'] == 'yes'): ?>
                            <i class="fa fa-check tick-icon"></i>
                        <?php else: ?>
                            <i class="fa fa-times cross-icon"></i>     
                        <?php endif ?>
                        
                        <?php  echo !empty($details['details']) ? esc_html($details['details']) : '';  ?>
                    </li>
                <?php endforeach;  ?>

            </ul>

            <?php if (!empty($theone_pricing_payment_btn)): ?>
                <div class="pricing-btn">
                    <a href="<?php  echo !empty($theone_pricing_payment_url) ? esc_url($theone_pricing_payment_url) : '';  ?>" class="custom-btn"><?php  echo !empty($theone_pricing_payment_btn) ? esc_html($theone_pricing_payment_btn) : '';  ?></a>
                </div>
            <?php endif ?>

        </div>
    </div>
    <?php endwhile; 
        wp_reset_postdata();
        endif; 
    ?>
</div>