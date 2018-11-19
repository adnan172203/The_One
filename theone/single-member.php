<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TheOne
 */

 get_header(); ?>
    <!-- Team-single  Start -->
<section class="team-single">
    <div class="section-padding">
        <div class="container">
            <div class="row">
            	<?php if ( have_posts()): while( have_posts()) : the_post(); 
                    get_template_part( 'template-parts/content', 'member' );
            	endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
    <!-- Team-single  End -->
<?php get_footer(); ?>