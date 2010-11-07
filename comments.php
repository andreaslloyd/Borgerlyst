<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="alert">Denne post er beskyttet af et kodeord. Indtast kodeordet for at se kommentarer.</p>
	<?php
		return;
	}
?>


<?php if ( have_comments() ) : ?>
	<h4 id="comments"><?php comments_number('Ingen kommentarer', '&Eacute;n kommentar', '% kommentarer' );?> til &#8220;<?php the_title(); ?>&#8221;</h4>

	<?php previous_comments_link() ?><?php next_comments_link() ?>

	<ol class="commentlist">
	<?php wp_list_comments('callback=borgerlyst_comments'); ?>
	</ol>

	<?php previous_comments_link() ?><?php next_comments_link() ?>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Der er lukket for kommentarer.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

	<h4><?php comment_form_title( 'Deltag i diskussionen!', 'Efterlad et svar til %s' ); ?></h4>

	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>Du skal være <a href="<?php echo wp_login_url( get_permalink() ); ?>">logget ind</a> for at kommentere her.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

		<p>Du er logget in som <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log af denne konto">Log af &raquo;</a></p>

		<?php else : ?>

		<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		<label for="author">Navn <?php if ($req) echo "(n&oslash;dvendigt)"; ?></label></p>

		<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		<label for="email">E-mail (din e-mail bliver ikke offentliggjort) <?php if ($req) echo "(n&oslash;dvendigt)"; ?></label></p>

		<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" />
		<label for="url">Hjemmeside</label></p>

		<?php endif; ?>

		<!--<p><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<textarea name="comment" id="comment" tabindex="4"></textarea>

		<input name="submit" type="submit" id="submit" tabindex="5" value="Komment&eacute;r &raquo;" />
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; // if you delete this the sky will fall on your head ?>