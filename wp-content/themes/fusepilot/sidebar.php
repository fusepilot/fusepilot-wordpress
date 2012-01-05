<div id="sidebar">

    <header id="header">
        <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    </header>

    <h2>Categories</h2>
    <ul>
      <?php 
        $args=array(
          'orderby' => 'count',
          'order' => 'desc'
          );
        $categories=get_categories($args);
        foreach($categories as $category) { ?>
            <li><?php echo $category->count ?></li>
          <?php } ?>
          
	   <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>

    <footer id="footer" class="source-org vcard copyright">
        <small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
    </footer>

</div>