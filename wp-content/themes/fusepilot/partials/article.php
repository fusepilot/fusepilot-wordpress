<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <div id="gallery">
		<?php while(the_repeater_field('gallery')): 
			$thumbnails_id = get_sub_field('image'); 
			echo wp_get_attachment_image($thumbnails_id, 'gallery');	 
		endwhile; ?>
	</div>
  
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
    <?php the_field('client'); ?>
  </header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>				
		<?php the_tags( 'Tags: ', ', ', ''); ?>
		<!-- <?php edit_post_link('Edit this entry','','.'); ?> -->
	</div>
	
	<?php if(comments_open()): ?>
	  <?php comments_template(); ?>
  <?php endif; ?>
</article>
