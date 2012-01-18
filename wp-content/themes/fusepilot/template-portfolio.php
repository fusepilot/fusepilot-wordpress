<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="index">
  
  <h2 class="header">Work Index</h2>
  
  <?php $style = $_GET['style'];  ?>
  
  <a href="<?php the_permalink() ?>/?style=masonry">masonry</a>
  <a href="<?php the_permalink() ?>/?style=list">list</a>
  
  <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'project',
		'paged'=>$paged
	));
	?>
	
	<?php
	  
	  switch($style) {
	    case 'masonry':
	      include (TEMPLATEPATH . '/partials/masonry.php' );
	      break;
	    case 'list':
	      include (TEMPLATEPATH . '/partials/list.php' );
	      break;
	    default:
	      include (TEMPLATEPATH . '/partials/masonry.php' );
	      break;
	  }
	?>
	
	<?php wp_reset_query(); ?>
	
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>