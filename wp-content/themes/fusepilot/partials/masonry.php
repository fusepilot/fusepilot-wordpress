<?php
  $pattern = array(array(2,1), array(3), array(1,2), array(2,1), array(3), array(1,2));
  $image_sizes = array('masonry-single', 'masonry-double', 'masonry-triple');
  $index = 0;
?>

<div id="masonry">
<?php if (have_posts()) : while (have_posts()) :  ?>
  
  
  <?php $pattern_row = $index % count($pattern); ?>

  <ul class="masonry_row">
  <?php foreach($pattern[$pattern_row] as $pattern_col): ?>
    <?php the_post(); //stupidly, this is what advances the loop. ?> 
    <?php $image_size = $image_sizes[$pattern_col - 1]; ?>
    <?php $image = wp_get_attachment_image_src(get_field('teaser'), $image_size); ?>
    
    <li class="masonry_col">
	    <div class="masonry_col_overlay">
	      <a href="<?php the_permalink() ?>">
	        <h3><?php the_title() ?></h3>
          <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
        </a>
	    </div>
  
      <img src="<?php echo $image[0]; ?>" alt="" />
    </li>
  <?php endforeach; ?>
  </ul>

  <?php $index++; ?>

<?php endwhile; ?>


<?php endif; ?>
</div>