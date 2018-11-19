<?php
$limit = ''; 
$order = ''; 
$orderby = ''; 
$postfrom = ''; 
$category = ''; 
$tag = ''; 
if (!defined('FW')) die('Access Forbidden');
    $limit= isset($atts['theone_recent_art_post_num']) ? $atts['theone_recent_art_post_num'] : '';
    //Blog post 
    $theone_article_multi_picker= isset($atts['theone_article_multi_picker']) ? $atts['theone_article_multi_picker'] : '';
    $order= isset($atts['theone_article_order']) ? $atts['theone_article_order'] : '';
    $orderby= isset($atts['theone_article_orderby']) ? $atts['theone_article_orderby'] : '';
    $postfrom = !empty($theone_article_multi_picker['post_from']) ? $theone_article_multi_picker['post_from'] : '';
    $category = !empty($theone_article_multi_picker['category']['cats']) ? $theone_article_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_article_multi_picker['tags']['tag']) ? $theone_article_multi_picker['tags']['tag'] : '';
?>

<div class="section-wrapper row">
	<?php $rpost = theone_post_query($limit,$postfrom,$category,$tag,$order,$orderby); 
                if ( $rpost->have_posts() ) : while( $rpost->have_posts() ): $rpost->the_post();
                ?>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="blog-element">
        	<?php if (has_post_thumbnail()): ?>
	            <div class="blog-thumb">
	                <?php the_post_thumbnail('theone-370-270'); ?>
	            </div>
        	<?php endif ?>

            <div class="blog-content">
            	<?php   the_title( '<a href="' . esc_url( get_permalink() ) . '"><h4>', '</h4></a>' );?>
                <ul class="post-meta">
                    <?php theone_posted_on(); ?>
                </ul>
                <p><?php echo wp_trim_words( get_the_content(), 20, '' ); ?></p>
            </div>
            <div class="blog-content-extra">
                <span><a href="<?php echo esc_url( get_permalink()); ?>"><?php esc_html_e( 'Read More', 'theone'); ?></a></span>
                <ul class="post-meta">
                    <li><i class="fa fa-eye"></i><?php if (function_exists('theone_post_views')) {
                    	echo theone_post_views(get_the_ID());
                    } ?></li>
                    <li><i class="fa fa-comment-o"></i><?php comments_popup_link('0','01','%'); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>