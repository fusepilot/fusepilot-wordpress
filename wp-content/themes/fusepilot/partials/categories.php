<section id="categories">
  <h3>Categories</h3>
  
  <?php 
    $args=array(
      'orderby' => 'count',
      'order' => 'desc',
      'exclude' => "1"
      );
    $categories=get_categories($args);
    
    $max_count = $categories[0]->count;
  ?>

  <div class="category_list" data-max-count="<?php echo $max_count; ?>">
    <?php foreach($categories as $category): ?>
      <?php if($category->count < 1) continue; ?>
      <div class="category" data-count="<?php echo $category->count ?>">
        
        <div class="category_meter"></div>
        <div class="category_link">
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        </div>
      </div>
    <?php endforeach; ?>    
  </div>
</section>