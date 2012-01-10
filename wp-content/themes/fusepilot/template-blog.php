<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>



<section id="content" class="index">
  
  <header>
    <h2>Blog Index</h2>
  </header>
  
  <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'post',
		'paged'=>$paged
	));
	?>
  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>
	<?php endwhile; ?>
  
	<?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>
  
  
	<?php else : ?>

		<h3>Not Found</h3>

	<?php endif; ?>
	
	<?php wp_reset_query(); ?>
	
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>