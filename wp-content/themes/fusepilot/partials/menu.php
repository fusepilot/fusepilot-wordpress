<?php 
  $items = wp_get_nav_menu_items('navigation');
  
  foreach($items as $i => $item) {
    $title = $item->title;
    $url = $item->url;
    $class = "item";
    if(is_page_current($item->object_id)) $class .= " active";
    $menu_list .= '<li class="' . $class . '"><a href="' . $url . '" title="' . $title . '">' . $title . '</a></li>';
  }
?>
<nav id="menu">
  <ul>
    <?php echo $menu_list; ?>
  </ul>
</nav>