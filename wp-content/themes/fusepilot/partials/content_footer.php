<div class="fill"></div>
<footer id="content_footer">
  <div class="top">
    <div class="categories">
      <h3>Categories</h3>

      <?php 
        $args=array(
          'orderby' => 'count',
          'order' => 'desc',
          );
        $categories=get_categories($args);
      ?>

      <ul>
        <?php foreach($categories as $category): ?>
        <li>
          <a href="<?php echo get_category_link( $category->term_id ); ?>" data-count="<?php echo $category->count ?>"><?php echo $category->name?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    
    <?php include (TEMPLATEPATH . '/partials/tweets.php' );?>
    
  </div>
  <div class="clear"></div>
  <div class="bottom">
    <div class="copyright"><p>&copy;2011-<?php echo date("Y"); echo " "; bloginfo('name'); ?></p></div>
    
    <div class="footer_nav"><?php include (TEMPLATEPATH . '/partials/footer_menu.php' );?></div>
  </div>
</div>