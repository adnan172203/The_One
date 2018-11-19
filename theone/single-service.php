<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TheOne
 */
 get_header(); ?>
<section class="content-area">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="section-wrapper row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
							<div class="sidebar-area">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
							</div>
						<?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="main-area">
                        	<?php if ( have_posts() ): while( have_posts() ): the_post();  	
                        		get_template_part( 'template-parts/content', 'service' );
							endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>