<article class="<?php echo get_post_type(); ?>">
  
  <?php 

  if(get_field("vimeo_id")): 
    $video_id = get_field("vimeo_id");
    echo do_shortcode("[vimeo id=\"{$video_id}\"]"); 
    
  elseif(get_field('gallery') || get_field('teaser')): ?>
    <div id="gallery">
  		<?php while(the_repeater_field('gallery')): 
  			$thumbnails_id = get_sub_field('image'); 
  			echo wp_get_attachment_image($thumbnails_id, 'gallery');
  			
  			wp_enqueue_script( 'nivo' );
  		endwhile; ?>
  		
  		<?php $image_id = get_field('teaser');
      echo wp_get_attachment_image($image_id, 'gallery'); ?>
    </div>
	<?php endif; ?>


  
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
  </header>

  <?php if(get_content()): ?>
  <?php include (TEMPLATEPATH . '/partials/messages.php' );?>
    
    <div class="entry-content">
      <?php the_content(); ?>
    </div>  
  <?php endif; ?>
	
	<footer>
	  <?php include (TEMPLATEPATH . '/partials/expanded_meta.php' ); ?>
	</footer>
	
	<?php if(comments_open()): ?>
	  <?php comments_template(); ?>
  <?php endif; ?>
</article>
