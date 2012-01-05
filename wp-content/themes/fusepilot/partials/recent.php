<div id="recent">
  
  <h2>Recent</h2>
  
  <ul>
    <?php query_posts('showposts=5'); ?>

    <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    <?php endwhile;?>
    
    <?php wp_reset_query(); ?>
  </ul>
  
</div>