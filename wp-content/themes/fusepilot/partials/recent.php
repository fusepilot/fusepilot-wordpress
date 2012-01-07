<section id="recent">
  
  <h3>Recent</h3>
  
  <ul>
    <?php query_posts('showposts=5'); ?>

    <?php while (have_posts()) : the_post(); ?>
      <li>
        <article>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <div class="details"><p><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y') ?></time></p></div>
        </article>
      </li>
    <?php endwhile;?>
    
    <?php wp_reset_query(); ?>
  </ul>
  
</section>