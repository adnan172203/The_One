<?php 
$limit= '';
$theone_portfolio_style= '';
$theone_portfolio_text= '';
$order= '';
$orderby= '';
$postfrom= '';
$category= '';
$tag= '';
if (!defined('FW')) die('Access Forbidden');
	$limit= isset($atts['theone_portfolio_count']) ? $atts['theone_portfolio_count'] : '';
	$theone_portfolio_style= isset($atts['theone_portfolio_style']) ? $atts['theone_portfolio_style'] : '';
	$theone_portfolio_text= isset($atts['theone_portfolio_text']) ? $atts['theone_portfolio_text'] : '';
	//Portfolio 
    $theone_portfolio_multi_picker= isset($atts['theone_portfolio_multi_picker']) ? $atts['theone_portfolio_multi_picker'] : '';
    $order= isset($atts['theone_portfolio_order']) ? $atts['theone_portfolio_order'] : '';
    $orderby= isset($atts['theone_portfolio_orderby']) ? $atts['theone_portfolio_orderby'] : '';
    $postfrom = !empty($theone_portfolio_multi_picker['post_from']) ? $theone_portfolio_multi_picker['post_from'] : '';
    $category = !empty($theone_portfolio_multi_picker['category']['cats']) ? $theone_portfolio_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_portfolio_multi_picker['tags']['tag']) ? $theone_portfolio_multi_picker['tags']['tag'] : '';

?>

<div class="section-wrapper row project <?php echo !empty($theone_portfolio_style) ? esc_attr($theone_portfolio_style) : ''; ?>">
    <div id="filters" class="button-group">
        <button class="button is-checked" data-filter="*"> <?php esc_html_e( 'all', 'theone');  ?></button>
			<?php 
				if ($postfrom == 'category') {
					$portfolio_categorys = get_terms( 'portfolio_cat', array(
							'hide_empty' => false
						));		
					$term_lenth = count($category);
				}elseif ($postfrom == 'tags') {
					$portfolio_categorys = get_terms( 'portfolio_tag', array(
							'hide_empty' => false
						));	
					$term_lenth = count($tag);
				}elseif ($postfrom == 'all') {
					$portfolio_categorys = get_terms( 'portfolio_cat', array(
							'hide_empty' => false
						));
				}
			?>	
		<?php 
		if ($postfrom == 'all') {
			if($portfolio_categorys ) : foreach( $portfolio_categorys  as $portfolio_category ) : 
				$count = $portfolio_category -> count ;
				if ( $count !== 0 ):?>
					<button class="button" data-filter=".<?php echo esc_attr($portfolio_category -> slug ); ?>"><?php echo esc_html($portfolio_category -> name ); ?></button>	
				<?php endif;
				endforeach; endif;
		}else{
			for ($i=0; $i < $term_lenth ; $i++) { 
				if ($postfrom == 'category') {
					$cat_id = $category[$i];
				}elseif ($postfrom == 'tags') {
					$cat_id = $tag[$i];
				}
			
			if($portfolio_categorys ) : foreach( $portfolio_categorys  as $portfolio_category ) : 
				$term_id = $portfolio_category -> term_id ;
				$count = $portfolio_category -> count ;
	
				 if (($term_id == $cat_id) && $count !== 0 ):?>
					<button class="button" data-filter=".<?php echo esc_attr($portfolio_category -> slug ); ?>"><?php echo esc_html($portfolio_category -> name ); ?></button>	
					<?php endif; 
				endforeach; endif;
			}
		}

		?>
    </div>

    <div class="grid">
		<?php $portfolio_post = theone_portfolio_query ($limit,$postfrom,$category,$tag,$order,$orderby);
		?>
		<?php 	if( $portfolio_post->have_posts() ): while( $portfolio_post->have_posts() ): $portfolio_post->the_post(); 
			$portfolio_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full' );
			$port_categories = get_the_terms( get_the_ID(), 'portfolio_cat'); 
		?>
        <div class="element-item <?php if( !empty($port_categories)){theone_get_term('portfolio_cat');}  ?>" data-category="transition">
            <div class="project-element">
            	<?php if ( has_post_thumbnail() ): ?>
                <div class="project-thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('theone-480-480'); ?></a>
                </div>
            	<?php endif; ?>
            	<?php if ($theone_portfolio_text == 'yes'): ?>
	                <div class="project-content">
	                    <a href="<?php the_permalink(); ?>">
	                        <?php the_title( '<h5>', '</h5>'); ?>
	                    </a>
	                    <p><?php if($port_categories) : foreach($port_categories as $port_category) : ?><?php echo '<span>' . esc_attr($port_category -> name ) . '</span>' . ' '; ?><?php endforeach; endif;?></p>
	                </div>
            	<?php endif ?>
            </div>
        </div>
    	<?php endwhile; 
        	wp_reset_postdata();
    	endif; ?>
    </div>
</div>