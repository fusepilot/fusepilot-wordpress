<?php
    
  require_once("includes/shortcodes.php");
  require_once("includes/post_types.php");
  require_once("includes/comment_errors.php");
  require_once("includes/theme_options.php");
  require_once("includes/flash.php");
  require_once("includes/social.php");
  
  global $settings;
  $settings = get_option( 'fusepilot_theme_options' );
  
  global $title;
  
  // Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

  $locale = get_locale();
  $locale_file = TEMPLATEPATH . "/languages/$locale.php";
  if ( is_readable($locale_file) )
      require_once($locale_file);
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

  // function fusepilot_enqueue_scripts() {
  //   wp_enqueue_script('jquery');
  //   wp_deregister_script('jquery');
  //  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
  // }
  //   add_action('wp_enqueue_scripts', 'fusepilot_enqueue_scripts');
  
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    function format_date($date) {
      $w3c_date = date(DATE_W3C, $date);
      $styled_date = date('M jS Y \a\t h:ia', strtotime($date));
      return "<time datetime=\"{$w3c_date}\" pubdate class=\"updated\">{$styled_date}</time>";
    }
    
    function remove_dashboard_widgets() {
    	global $wp_meta_boxes;

    	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

    }
    add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
    
    
    function is_page_current($page_id) {
      $page = get_page($page_id);
      $page_slug = $page->post_name;
      $current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      $uri = str_replace(site_url(), '', $current_url);
      
     $match = "/^\/{$page_slug}/i";
      if(preg_match($match, $uri)) {
        return 1;
      } else {
        return 0;
      }
    }
    
    add_action('wp_insert_comment','fusepilot_wp_insert_comment_hook');
    function fusepilot_wp_insert_comment_hook($id){
      $comment = get_comment($id);
      
      if($comment->comment_approved) {
        set_flash("comment_accepted", 1);
      } else {
        set_flash("comment_needs_moderation", 1);
      }
      
    }
    
    // add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

    add_image_size( "gallery", 700, 394, true );
    add_image_size( "masonry-triple", 700, 160, true );
    add_image_size( "masonry-double", 466, 160, true );
    add_image_size( "masonry-single", 233, 160, true );
    add_image_size( "teaser", 700, 80, true );
    
    function show_pagination() {
    	global $wp_query;
    	return ($wp_query->max_num_pages > 1);
    }
    
    //show project with posts in taxonomy
    add_filter( 'pre_get_posts', 'my_get_posts' );
    function my_get_posts( $query ) {
        if ( $query->is_category || $query->is_tag )
          $query->set( 'post_type', array( 'post', 'project') );
        return $query;
    }
?>