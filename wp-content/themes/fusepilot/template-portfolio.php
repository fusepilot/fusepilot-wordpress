<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="index">
  
  <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'project',
		'paged'=>$paged
	));
	?>
	
	<?php
	  $style = $_GET['style']; 
	  
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
	
	<div class="filler"></div>
</section>

<?php get_footer(); ?>