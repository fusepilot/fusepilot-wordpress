<?php
/*
Template Name: Portfolio
*/

?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php

$style = $_GET['style'];

c($paged);

$args = array('post_type'=> 'project', 'paged'=>$paged);

$order_by = $_GET['order_by'];
if(!empty($order_by)) {
  $args['orderby'] = $order_by;
};

if($style == 'masonry' || empty($style)) {
  $args['posts_per_page'] = -1;
};

query_posts($args);

?>

<section id="content" class="index">
  
  <?php
    
    $urls['masonry'] = get_permalink() . '?' . http_build_query( array_merge($_GET, array('style' => 'masonry')) );
    $urls['list'] = get_permalink() . '?' . http_build_query( array_merge($_GET, array('style' => 'list')) );
    //$urls['name'] = get_permalink() . '?' . http_build_query( array_merge($params, array('order_by' => 'title')) );
    //$urls['date'] = get_permalink() . '?' . http_build_query( array_merge($params, array('order_by' => 'date')) );
  ?>
  
  <header>
    <!-- <h2>Work Index</h2> -->
    <div class="list_options">
      <a class="masonry_button <?php the_active_param("style", "masonry", "active", true); ?>" href="<?php echo $urls['masonry']; ?>">Masonry</a>
      <a class="list_button <?php the_active_param("style", "list", "active"); ?>" href="<?php echo $urls['list']; ?>">List</a>
    </div>
  </header>
  	
	<?php if(get_content()): ?>
		<div class="entry-content">
		  <?php the_content(); ?>
		</div>  
	<?php endif; ?>

  
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