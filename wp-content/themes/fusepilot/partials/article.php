<?php 
   
  $class = "";
  $class .= get_post_type();

  if(has_attached_media()) {
    $class .= " has_media";
  }
?>
<article class="<?php echo $class; ?>">
  
  <?php if(get_field('gallery') || get_field('teaser')): ?>
    <div id="gallery" class="flexslider">
      <div class="slides">
    		<?php while(the_repeater_field('gallery')): 
    			$thumbnails_id = get_sub_field('image'); ?>
    			
    			<li><?php echo wp_get_attachment_image($thumbnails_id, 'gallery'); ?></li>
  			
    			<?php wp_enqueue_script( 'flex' );
    		endwhile; ?>
  		
    		<?php $image_id = get_field('teaser'); ?>
        <li><?php echo wp_get_attachment_image($image_id, 'gallery'); ?></li>
      </div>
    </div>
	<?php endif; ?>
	
	
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
  </header>

  <?php if(get_content()): ?>
    <div class="entry-content">
      <?php include (TEMPLATEPATH . '/partials/messages.php' );?>
      <?php the_content(); ?>
    </div>
  <?php elseif(has_flash()): ?>  
    <div class="entry-content">
      <?php include (TEMPLATEPATH . '/partials/messages.php' );?>
    </div>
  <?php endif; ?>
	
	<footer>
	  <?php include (TEMPLATEPATH . '/partials/expanded_meta.php' ); ?>
	</footer>
	
	<?php if(comments_open()): ?>
	  <?php comments_template(); ?>
  <?php endif; ?>
</article>
