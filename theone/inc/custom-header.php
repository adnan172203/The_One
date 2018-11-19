<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package TheOne
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses theone_header_style()
 */
function theone_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'theone_custom_header_args', array(
		'default-image'          => '',
	) ) );
}
add_action( 'after_setup_theme', 'theone_custom_header_setup' );

