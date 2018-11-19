<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TheOne
 */

get_header(); ?>
<div class="content-area">
    <div class="section-padding-404">
        <div class="container">
            <div class="row">
                <div class="section-wrapper row">
                    <div class="main-area">
	                    <div class="error-options">
	                    	<div class="container" >
	                    		<div class="row">
			                    	<h1><?php esc_html_e('404', 'theone'); ?></h1>
									<?php get_search_form(); ?>
	                    		</div>
	                    	</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
