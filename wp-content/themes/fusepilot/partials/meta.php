<div class="details">
  <p>
    <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y \a\t h:ia') ?></time>
    <?php if($post->comment_count > 0): ?>
      <span>|</span>
      <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
    <?php endif; ?>

    <?php if(count(get_the_category()) > 0): ?>
      <span>|</span><?php foreach(get_the_category() as $index=>$category): ?>
        <?php if($category->cat_name != 'Uncategorized'): ?>
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endif; ?>
    
    <?php if(get_field('client')): ?>
      <span>|</span>
      Client: <?php the_field('client'); ?>
    <?php endif; ?>
  </p>
</div>