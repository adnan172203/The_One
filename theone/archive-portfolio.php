<?php
/**
 * The template for displaying archive post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TheOne
 */

 get_header(); ?>

    <!--  project Start -->
    <section class="project style-four">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-wrapper">
                    	<?php if ( have_posts()): while( have_posts()): the_post();
                    		get_template_part( 'template-parts/content', 'portfolio' );
                    	endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  project End -->
 <?php get_footer(); ?>