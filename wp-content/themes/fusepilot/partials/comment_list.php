<?php if ( have_comments() ) : ?>
	
	<h3 id="comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h3>

	<?php
	
	$comments = get_comments( array(
    'status'    => 'approve',
    'type'    => 'comment',
    'order' => 'asc',
    'post_id' => get_the_ID(),
  ) );
	
	?>

	<ol class="comments">
		<?php foreach($comments as $comment): ?>
		  <div class="comment">
		    <div class="avatar">
	        <?php echo get_avatar( $comment->comment_author_email, '40' ); ?>
	      </div>
		    <div class="details">
		      <h4><span class="author"><?php echo $comment->comment_author; ?> SAID:</span></h5>
		      <p>
		        <span><?php echo date('M jS Y \a\t h:ia', strtotime($comment->comment_date)); ?></span>
		        
		        <?php if($comment->comment_author_url): ?>
		          <span>|</span>
		          <a href="<?php echo $comment->comment_author_url; ?>"><?php echo str_replace("http://", "",$comment->comment_author_url ) ?></a>
	          <?php endif; ?>
		      </p>
	      </div>
	      <div class="body">
	        <p>
	         <?php echo $comment->comment_content; ?>
	        </p>
	      </div>
		  </div>
	  <?php endforeach; ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Comments are closed.</p>

	<?php endif; ?>
	
<?php endif; ?>