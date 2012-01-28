<article class="<?php echo get_post_type(); ?> teaser">
  
  <div class="article_tick"></div>
  
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
  </header>
  
  
  
  <?php if(get_content()): ?>
    <div class="entry-content">
      <?php if(get_field('teaser')): ?>
        <?php $image_id = get_field('teaser');
        $image_src = wp_get_attachment_image_src($image_id, 'masonry-triple'); ?>
        <img class="teaser" src="<?php echo $image_src[0]; ?>" />
      <?php endif; ?>
      
      <?php the_excerpt(); ?>
    </div>  
  <?php endif; ?>
	
</article>
