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
  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>
	<?php endwhile; ?>
  
  <?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
  
  <?php wp_reset_query(); ?>
  
  <div class="filler"></div>
</div>

<?php get_footer(); ?>