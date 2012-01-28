<div class="details">
  <p>
    <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y \a\t h:ia') ?></time>
    <?php if($post->comment_count > 0): ?>
      <span>|</span>
      <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
    <?php endif; ?>
    
    

    
    <?php 
      $categories = get_the_category();
      $category_count = count($categories); 
    
      if($category_count > 1) {
      echo "<span>|</span>";
      foreach($categories as $cat_index=>$category) {
        if($category->cat_name != 'Uncategorized') {
          echo $category->name; 
          if($cat_index < $category_count - 1) { echo ", "; }
        }
      }
    } ?>
    
    <?php if(get_field('client')) {
      echo "<span>|</span>";
      echo " Client: ";
      echo the_field('client');
    } ?>
  </p>
</div>