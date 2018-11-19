<?php
/**
 * Template Name: Template Full Width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TheOne
 */

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'template' );

		// If comments are open or we have at least one comment, load up the comment template.

	endwhile; // End of the loop.
	?>

<?php
get_footer();
