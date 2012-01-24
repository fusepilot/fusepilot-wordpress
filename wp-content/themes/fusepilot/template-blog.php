<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="index">
  
	<h2 class="header"><?php the_title(); ?></h2>
	
	<?php if(get_content()): ?>
		<div class="entry-content">
		  <?php the_content(); ?>
		</div>  
	<?php endif; ?>
  
  <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'post',
		'paged'=>$paged
	));
	?>
  
  <?php include (TEMPLATEPATH . '/partials/list.php' ); ?>
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
	
</section>

<?php get_footer(); ?>