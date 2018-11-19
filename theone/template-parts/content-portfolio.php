<?php 
$theone_portfolio_gallery = '';
$theone_portfolio_info = '';
if (defined('FW')) {
    //metabox data
    $theone_portfolio_gallery = fw_get_db_post_option( get_the_ID(), 'theone_portfolio_gallery');
    $theone_portfolio_info = fw_get_db_post_option( get_the_ID(), 'theone_portfolio_info');
} 
?>
<div class="project-element archive-padding">
    <div class="project-thumb">
        <!-- Swiper -->
        <div class="project-single-container">
            <div class="swiper-wrapper">
            	<?php foreach ($theone_portfolio_gallery as $gallery): ?>
              			<div class="swiper-slide">
                      <?php if( has_post_thumbnail() ):?>
                     			<?php the_post_thumbnail(); ?>
                      <?php endif; ?>
                   </div>
                    <div class="swiper-slide">
                        <img src="<?php echo !empty( $gallery['url']) ? esc_url($gallery['url']) : '' ; ?>">
                    </div>
            	<?php endforeach ?>
            </div>
            <!-- Add Arrows -->
            <div class="custom-button-next">
                <i class="fa fa-chevron-left"></i>
            </div>
            <div class="custom-button-prev">
                <i class="fa fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <div class="project-single-content row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="project-content">
            	<?php the_title('<h4>', '</h4>') ?>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="project-information">
                <h4> <?php esc_html_e('Project Information', 'theone'); ?></h4>
                <ul class="project-info">
                    <li>

                        <div class="project-info-left">
                            <i class="fa fa-tag"></i>
                            <span><?php esc_html_e('Category :', 'theone'); ?></span>
                        </div>
                        <div class="project-info-right">
                          	<?php 
                            	$port_categories = get_the_terms( get_the_ID(), 'portfolio_cat'); 
                                if (!empty($port_categories)) {
                                    foreach ($port_categories as $cats) {
                                        echo '<span>' . $cats->name . '</span>' . ' '; 
                                    }
                                }
                            ?>
                            
                        </div>
                    </li>
					<?php foreach ($theone_portfolio_info as $info):?>
                        <li>
                            <div class="project-info-left">
                                <i class="<?php echo !empty($info['icon']) ? esc_attr($info['icon']['icon-class']) : '' ; ?>"></i>
                               <span><?php echo !empty($info['title']) ? esc_html($info['title']) : '' ; ?></span>
                            </div>
                            <div class="project-info-right">
                                <p><?php echo !empty($info['info']) ? esc_html($info['info']) : '' ; ?></p>
                            </div>
                        </li>
					<?php endforeach;?>
                    <li>
                        <div class="project-info-left">
                            <i class="fa fa-share-alt"></i>
                            <span> <?php esc_html_e('Share :','theone'); ?></span>
                        </div>
                        <div class="project-info-right">
                            <ul class="social-media">
			                	<?php if (function_exists('theone_social_share')){
			                		theone_social_share();
			                	}?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>