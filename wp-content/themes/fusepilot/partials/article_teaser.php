<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
    <?php the_field('client'); ?>
  </header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>				
		<?php the_tags( 'Tags: ', ', ', ''); ?>
		<!-- <?php edit_post_link('Edit this entry','','.'); ?> -->
	</div>
</article>
