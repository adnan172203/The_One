<?php

/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */

function theone_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'theone' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'theone' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            // Proceed with normal comments.
            global $post;
            ?>



		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>" >
			<article>
				<div class="comment-author">
					<?php echo get_avatar( $comment, 70 ); ?>
				</div><!-- .comments-image -->
				<div class="comment-body">
					<div class="comment-meta">
						<div class="comments-author-name">
							<h4><?php echo get_comment_author_link(); ?><small><?php echo sprintf( esc_html__( '%1$s At %2$s', 'theone' ), get_comment_date(), get_comment_time() ) ; ?></small></h4>
						</div>
						<div class="reply-icon">
							<h6>
							  <?php
								comment_reply_link( array_merge($args, array(
									'reply_text'		=> '<i class="fa fa-reply-all"></i> Reply',
									'depth'				=> $depth,
									'max_depth'			=> $args['max_depth'],
								))); 
							  ?>
							</h6>
						</div>
					</div><!-- .comment-meta -->
					<div class="entry-comment">
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'theone' ); ?></p>
                        <?php endif; ?>

                        <?php comment_text(); ?>
                        <?php edit_comment_link( esc_html__( 'Edit', 'theone' ), '<p class="edit-link">', '</p>' ); ?>
					</div>
				</div><!-- .comment-body -->
			</article>
			<?php
            break;
    endswitch; // end comment_type check

}