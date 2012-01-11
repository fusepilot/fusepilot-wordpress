<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

  <?php if(get_field('gallery')): ?>
    <div id="gallery">
  		<?php while(the_repeater_field('gallery')): 
  			$thumbnails_id = get_sub_field('image'); 
  			echo wp_get_attachment_image($thumbnails_id, 'gallery');	 
  		endwhile; ?>
    </div>
	<?php endif; ?>
  
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
  </header>

	<div class="entry-content">
	  <?php include (TEMPLATEPATH . '/partials/messages.php' );?>
	  
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	</div>
	
	<footer>
	  <?php include (TEMPLATEPATH . '/partials/expanded_meta.php' ); ?>
	</footer>
	
	<?php if(comments_open()): ?>
	  <?php comments_template(); ?>
  <?php endif; ?>
</article>
