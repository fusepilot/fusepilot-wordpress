
  <?php 
  // $pages = get_pages(array("exclude" => 138));
  // $links = array();
  // 
  // foreach($pages as $i => $page) {
  //   $page_url = get_page_link($page->ID);
  //   
  //   $title = apply_filters('the_title', $page->post_title);
  //   
  //   
  //   $link = '<li class="item';
  //   
  //   if(is_page_current($page)) {
  //     $link .= " active";
  //   }
  //   
  //   $link .= $page->ID;
  //   
  //   $link .= '">';
  //   $link .= '<a href="' . $page_url . '" title="' . $title . '">' . $title . '</a>';
  //   $link .= '</li>';
  //   
  //   $links[$i] = $link;
  // }
  // 
  // $links = implode('', $links);
  
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