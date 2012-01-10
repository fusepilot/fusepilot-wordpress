<?php
  $pages = get_pages(array('sort_column' => 'menu_order', 'sort_order' => 'asc'));
  $links = array();
  
  foreach($pages as $i => $page) {
    $link = '<li class="page-' . (is_page($page->ID) ? 'active' : 'item') . '">';
    $link .= '<a href="' . get_page_link($page->ID) . '" title="' . apply_filters('the_title', $page->post_title) . '">' . apply_filters('the_title', $page->post_title) . '</a>';
    $link .= '</li>';
    
    $links[$i] = $link;
  }
  
  $links = implode('<span class="separator">|</span>', $links);
?>

<ul>
  <?php echo $links; ?>
</ul>