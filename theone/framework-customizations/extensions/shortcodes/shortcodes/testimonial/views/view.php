<?php 
$limit = '';
$order = '';
$orderby = '';
$postfrom = '';
$category = '';
$tag = '';
if (!defined('FW')) die('Access Forbidden');
	$limit = isset($atts['theone_testi_post_limit']) ? $atts['theone_testi_post_limit'] : '';
    $order= isset($atts['theone_testi_order']) ? $atts['theone_testi_order'] : '';
    $orderby= isset($atts['theone_testi_orderby']) ? $atts['theone_testi_orderby'] : '';
    //Post from...
    $theone_testi_multi_picker= isset($atts['theone_testi_multi_picker']) ? $atts['theone_testi_multi_picker'] : '';
    $postfrom = !empty($theone_testi_multi_picker['post_from']) ? $theone_testi_multi_picker['post_from'] : '';
    $category = !empty($theone_testi_multi_picker['category']['cats']) ? $theone_testi_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_testi_multi_picker['tags']['tag']) ? $theone_testi_multi_picker['tags']['tag'] : '';
?>	


<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php $testimonial = theone_testimonial_query($limit,$postfrom,$category,$tag,$order,$orderby);

			if( $testimonial->have_posts()): while( $testimonial->have_posts()): $testimonial->the_post();
			//metabox data
			$theone_client_image = fw_get_db_post_option( get_the_ID(), 'theone_client_image');
		?>
	        <div class="swiper-slide">
	            <div class="testimonial-content">
	                <img src="<?php echo !empty($theone_client_image['url']) ? esc_attr($theone_client_image['url']) : ''; ?>" />
	                <?php the_content(); ?>
	                <?php the_title('<h6>', '</h6>');?>
	            </div>
	        </div>
		<?php endwhile; 
        	wp_reset_postdata();
		endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>