<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
<?php
// You can start editing here -- including this comment!
if ( have_comments() ) : ?>
	<div class="blogpage-single-heading">
		<h6 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'theone' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h6>
	</div>

		<?php the_comments_navigation(); ?>
	<div class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'callback'	=> 'theone_comment_template'
			) );
		?>
	</div><!-- .comment-list -->
	<?php the_comments_navigation();
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'theone' ); ?></p>
	<?php
	endif;
endif; //Check for have_comments(). 
?>
</div><!-- .comments-area -->

<div class="contact-form-area">
<?php 
$theone_comments_args = array(
			// Change the title of send button
			'label_submit' => esc_html__( 'Post Comment', 'theone' ),
			'fields'		=>array(
				'author'	=> '<div class="form-group"><input id="author" class="form-control" name="author" placeholder="Name*" type="text" size="30" maxlength="245" aria-required="true" required="required">',
				'email'=> '<input id="email" name="email" class="form-control" placeholder="Email*" type="email" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></div>',
				'url'=> '<div class="form-group"><input id="url" name="url" type="url" class="form-control" placeholder="Website" size="30" maxlength="200"></div>',
			),
			// Change the title of the reply section
			// Change the title of the reply section
			'title_reply' => esc_html__( 'Leave a Reply', 'theone' ),
			// Remove "Text or HTML to be displayed after the set of comment fields".
			'comment_notes_after' => '',
			'class_form' => 'login-form',
			// Redefine your own textarea (the comment body).
			'comment_field' => '<div class="form-textarea"><textarea id="comment" class="form-control" name="comment" value= "message" placeholder="Message*" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></div>',
	);
	comment_form( $theone_comments_args );
?>
</div>