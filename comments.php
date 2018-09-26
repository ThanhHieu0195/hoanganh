<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoanganh
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
	if ( have_comments() ) :
		?>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hoanganh' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
	<label for="comment">Comment</label>
	<div class="sc-form__group">
		<div class="sc-form__item--half">
			<input class="sc-form__control" type="text" name="name" placeholder="Your name">
		</div>
		<div class="sc-form__item--half">
			<input class="sc-form__control" type="text" name="email" placeholder="Your email">
		</div>
	</div>
	<?php
	comment_form();
	?>

</div><!-- #comments -->
