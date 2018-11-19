<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */
	$theone_excerpt_switch = 'on';
	$theone_excerpt_limit = 45;
	if (defined('FW')) {
		$theone_content_excerpt_picker = fw_get_db_settings_option('theone_content_excerpt_picker');
		$theone_excerpt_switch = $theone_content_excerpt_picker['theone_excerpt_switch'];
		$theone_excerpt_limit = $theone_content_excerpt_picker['on']['theone_excerpt_limit'];
	}

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('main-area-element'); ?>>
	<div class="blog-element">
		<?php theone_post_thumbnail(); ?>
		<div class="blog-content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h4 class="entry-title">', '</h4>' );
				else :
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta post-meta">
					<?php theone_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php if( is_singular() ):
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'theone' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theone' ),
						'after'  => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
				else:
					if (has_excerpt()) {
						the_excerpt();
					}elseif( $theone_excerpt_switch == 'on' ){
						echo '<p>' . wp_trim_words( get_the_content(), $theone_excerpt_limit, '' );'</p>';
					}
				endif;
				?>
			</div><!-- .entry-content -->

			<?php if( is_single()){theone_edit_post_link();}  ?>
		</div>

		<?php if( !is_single()): ?>
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
		<?php endif; ?>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
<?php if(is_single()): ?>
	<div class='main-area-element'>
		<div class="tag-share-element">
			<footer class="entry-footer">
				<?php theone_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php if (function_exists('theone_social_share')): ?>
				<div class="share-element">
	                <ul class="social-media">
	                	<?php theone_social_share(); ?>
	                </ul>
	            </div>
			<?php endif ?>
		</div>
	</div>
<?php endif; ?>