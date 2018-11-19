<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TheOne
 */

get_header(); ?>

<div class="content-area blog-single">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="section-wrapper">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="main-area">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_type() );
							?>
							<div class="main-area-element">
								<div class="theone-navigation">
									<?php 
										the_post_navigation(array(
												'prev_text' => __('<i class="fa fa-arrow-left"></i>  Previous Post','theone'),
												'next_text' => __('Next Post <i class="fa fa-arrow-right"></i>','theone'),
											)
										); 
									?>
								</div>
							</div>
							<div class="main-area-element">
							<?php

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?></div><?php
							endwhile; // End of the loop.
							?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
