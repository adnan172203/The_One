<?php 
$limit= '';
$order= '';
$orderby= '';
$postfrom= '';
$category= '';
$tag= '';
if (!defined('FW')) die('Access Forbidden');
    $limit= isset($atts['theone_member_limit']) ? $atts['theone_member_limit'] : '';
    $order= isset($atts['theone_team_order']) ? $atts['theone_team_order'] : '';
    $orderby= isset($atts['theone_team_orderby']) ? $atts['theone_team_orderby'] : '';
    //Post from...
    $theone_team_multi_picker= isset($atts['theone_team_multi_picker']) ? $atts['theone_team_multi_picker'] : '';
    $postfrom = !empty($theone_team_multi_picker['post_from']) ? $theone_team_multi_picker['post_from'] : '';
    $category = !empty($theone_team_multi_picker['category']['cats']) ? $theone_team_multi_picker['category']['cats'] : '';
    $tag = !empty($theone_team_multi_picker['tags']['tag']) ? $theone_team_multi_picker['tags']['tag'] : '';

?>


<div class="section-wrapper row">
        <?php $member_post = theone_member_query ($limit,$postfrom,$category,$tag,$order,$orderby);
            if($member_post->have_posts()):while($member_post->have_posts()): $member_post->the_post(); 
            //metabox data
            $theone_member_desi = fw_get_db_post_option( get_the_ID(), 'theone_member_desi');
        ?>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-element">
            <?php if ( has_post_thumbnail() ) :?>
                <div class="team-thumb">
                   <?php the_post_thumbnail('theone-260-290'); ?>
                </div>
            <?php endif; ?>
            <div class="team-content">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title('<h5>', '</h5>'); ?>
                </a>
                <p><?php echo !empty($theone_member_desi) ? esc_html($theone_member_desi) : ''; ?></p>
            </div>
        </div>
    </div>
<?php endwhile; 
    wp_reset_postdata();
    endif; ?>
</div>