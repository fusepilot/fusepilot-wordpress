<div class="details">
  <div class="left">
    <section>
      <p>
        <span>Posted: </span><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y \a\t h:ia') ?></time>
      </p>
      <p>
        <?php if(count(get_the_category()) > 1): // > 1 to compensate for 'uncategorized' ?>
          <span>Categories: </span><?php foreach(get_the_category() as $index=>$category): ?>
          <?php if($category->cat_name != 'Uncategorized'): ?>
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
          <?php endif;?>
          <?php endforeach; ?>
        <?php endif; ?>
      </p>
      <p>
        <?php if(count(get_the_tags()) > 0): // > 1 to compensate for 'uncategorized' ?>
          <span>Tags: </span><?php foreach(get_the_tags() as $index=>$tag): ?>
          <a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a>
          <?php endforeach; ?>
        <?php endif; ?>
      </p>
      <p>
        <?php if(get_field('client')): ?>
          <span>Client: </span><?php the_field('client'); ?>
        <?php endif; ?>
      </p>
    </section>
  </div>
  <div class="right">
    <section>
      
    </section>
  </div>
</div>