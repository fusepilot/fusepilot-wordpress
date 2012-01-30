<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="front">
  <div class="video">
    <?php echo do_shortcode('[vimeo id='.$settings['front_page_vimeo_id'].']');?>
  </div>
  
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  
 <?php
	//query posts
	query_posts(
		array(
		'post_type' => 'project',
		'post_status' => 'publish',
		'posts_per_page' => 8
	));
	?>
	
	<?php include (TEMPLATEPATH . '/partials/masonry.php' );?>
  
  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</div>

<?php get_footer(); ?>
