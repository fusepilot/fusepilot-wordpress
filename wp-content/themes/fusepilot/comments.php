<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly.');
?>

<?php include (TEMPLATEPATH . '/partials/comment_list.php' ); ?>

<?php if ( comments_open() ) : ?>

<div id="comment_form">
	<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <fieldset>
		<?php if ( is_user_logged_in() ) : ?>
      
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>

			<div>
				<input type="text" name="author" id="author" placeholder="Full Name*" class="required" value="<?php echo esc_attr($comment_author); ?>" size="60" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
				<input type="text" name="email" id="email" placeholder="Email* (Will not be published)" class="required" value="<?php echo esc_attr($comment_author_email); ?>" size="60" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>
      
			<div>
				<input type="text" name="url" id="url" placeholder="Website" value="<?php echo esc_attr($comment_author_url); ?>" size="60" tabindex="3"/>
			</div>
      
		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" class="required" cols="58" rows="10" tabindex="4"></textarea>
		</div>

    <?php if( !is_user_logged_in()): ?>
      <p>Your first comment will be reviewed before it's published. <br/>
      * Required</p>
    <?php endif; ?>

		<div>
			<input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>
    </fieldset>
	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
