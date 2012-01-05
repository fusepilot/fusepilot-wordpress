<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="index">
  <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'project',
		'paged'=>$paged
	));
	?>
	
	<?php
	  $pattern = array(array(2,1), array(3), array(1,2), array(2,1), array(3), array(1,2));
	  $image_sizes = array('masonry-single', 'masonry-double', 'masonry-triple');
	  $index = 0;
	?>
  
	<?php if (have_posts()) : while (have_posts()) :  ?>
	  
	  <?php $pattern_row = $index % count($pattern); ?>
	  
	  <ul>
	  <?php foreach($pattern[$pattern_row] as $pattern_col): ?>
	    <?php the_post(); //stupidly, this is what advances the loop. ?> 
	    <?php $image_size = $image_sizes[$pattern_col - 1]; ?>
	    <?php $image = wp_get_attachment_image_src(get_field('teaser'), $image_size); ?>
      <li><img src="<?php echo $image[0]; ?>" alt="" /></li>
    <?php endforeach; ?>
    </ul>
    
    <?php $index++; ?>
	<?php endwhile; ?>
  
  <?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	
	<?php wp_reset_query(); ?>
  
  <div class="filler"></div>
</div>

<?php get_footer(); ?>