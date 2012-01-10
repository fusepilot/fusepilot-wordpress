<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
  
  
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
  </header>
  
  <?php if(get_field('teaser')): ?>
    <?php $image_id = get_field('teaser'); 
		echo wp_get_attachment_image($image_id, 'teaser'); ?>
  <?php endif; ?>
  
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>			
		<!-- <?php edit_post_link('Edit this entry','','.'); ?> -->
	</div>
</article>
