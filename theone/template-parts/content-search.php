<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('main-area-element'); ?>>
	<div class="blog-element">
		<div class="blog-content">
			<header class="entry-header">
				<?php
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta post-meta">
						<?php theone_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php echo '<p>' . wp_trim_words( get_the_content(), 45, '' );'</p>'; ?>
			</div><!-- .entry-content -->
		</div>
		<div class="blog-content-extra">
            <span> <a href="<?php echo esc_url( get_the_permalink()); ?>"><?php esc_html_e('Read More', 'theone'); ?></a> </span>
            <ul class="post-meta">
                <li><i class="fa fa-eye"></i><?php if (function_exists('theone_post_views')) {
                	echo theone_post_views(get_the_ID());
                } ?></li>
                <?php if ( comments_open() ): ?>
                	<li><i class="fa fa-comment-o"></i><?php comments_popup_link('0','01','%'); ?></li>
            	<?php endif; ?>
            </ul>
        </div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->