<section id="categories">
  <h3>Categories</h3>
  
  <?php 
    $args=array(
      'orderby' => 'count',
      'order' => 'desc'
      );
    $categories=get_categories($args);
  ?>

  <ul>
    <?php foreach($categories as $category): ?>
    <li>
      <a href="<?php echo get_category_link( $category->term_id ); ?>" data-count="<?php echo $category->count ?>"><?php echo $category->name . ' (' . $category->count . ')'?></a>
    </li>
    <?php endforeach; ?>    
  </ul>
</section>