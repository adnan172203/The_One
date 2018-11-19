<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

get_header(); ?>

<div class="content-area">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="section-wrapper row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="main-area">
							<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>

								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile;
								else :
									/*
									 * 
									 * If no post found
									 * 
									 */
									get_template_part( 'template-parts/content', 'none' );
								endif; ?>
							<div class="main-area-element">
								<div class="custom-pagination">
									<?php 
										$args = array(
											'prev_text' => '<i class="fa fa-angle-double-left"></i>',
											'next_text' => '<i class="fa fa-angle-double-right"></i>',
											'screen_reader_text' => '' 
										);
									the_posts_pagination($args); 

									?>
								</div>
							</div>
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