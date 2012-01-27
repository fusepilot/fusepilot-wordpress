<?php
  //include_once 'geshi.php';

  remove_filter( 'the_content', 'wpautop' );
  add_filter( 'the_content', 'wpautop', 99);
  
  
  include_once 'column_shortcode.php';
  
  @ini_set('pcre.backtrack_limit', 500000);
  
  
  
  
  function vimeo_embed_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(
        "id" => '',
        "width" => '700',
        "height" => '394'
    ), $atts));
  return '<iframe class="video vimeo" src="http://player.vimeo.com/video/'.$id.'?title=0&byline=0&portrait=0&color=ffffff" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
  }
  add_shortcode("vimeo", "vimeo_embed_shortcode");
  
  
  
  
  
  

  function code_shortcode( $atts, $content = null ) {
    //$content = force_balance_tags( $content );
    $content = trim($content);
    $content = str_replace("\r\n", '', $content);
    $content = clean_pre($content);
    $content = shortcode_unautop($content);
    
    extract(shortcode_atts(array(
        "file" => '',
        "language" => '',
    ), $atts));
    
    $code = '';
    $class = '';
    if($file) $code .= '<h5 class="code_header">'. $file .'</h5>';
    if($language) { 
      $class = ' class="' . $language . '"';
      
      //wp_enqueue_script("highlight", get_template_directory_uri() . "/_/js/highlight.js");
      //wp_enqueue_script("highlight_jquery", get_template_directory_uri() . "/_/js/highlight.jquery.js", array("jquery"));
      //wp_enqueue_script($language, get_template_directory_uri() . "/_/js/languages/" . $language . ".js");
    }
    
    //$content = htmlentities($content);
    // $content = str_replace(array('</p>', '<br />'), '', $content);
    // $content = str_replace(array('<p>'), '  ', $content);
    //$content = html_entity_decode($content);
    
    //$content = trim($content);
    
    // $geshi = new GeSHi($content, 'python');
    // $geshi->set_header_type(GESHI_HEADER_NONE);
    // $geshi->set_tab_width(20);
    // $geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS);
    // $geshi->enable_classes();'
    
    $pre_class = "";
    
    if($file) {
      $pre_class = " class=\"has_header\"";
    }
    
    $code .= "<pre{$pre_class}><code>";
    $code .= $content;
    $code .= "</code></pre>";
    return $code;
  }
  add_shortcode( 'code', 'code_shortcode');
  
  
  
  
  
  function quote_shortcode($atts, $content = null) {
    $content = shortcode_unautop($content);
    $output = "<blockquote>{$content}</blockquote>";
    return $output;
  }
  add_shortcode("quote", "quote_shortcode");
  
  
  
  
  
  
  
  function image_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
      'filename' =>'',
      'alt' =>'',
      'style' => 'gallery',
    ), $atts ) );
    
    
    $query_images_args = array('post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1);
    $query_images = new WP_Query( $query_images_args );
    $image_src = "";
    foreach ( $query_images->posts as $image) {
      if( esc_html( basename( $image->guid )) == $filename) {
        $image_src = wp_get_attachment_image($image->ID, $style);
        break;
      }
    }
    
    $output = $image_src;
    return $output;
  }

  add_shortcode('image','image_shortcode');
  
  
  
  
  
  
  
  
  function highlight_shortcode($atts, $content = null) {
    $output = "<span class=\"highlight\">{$content}</span>";
    return $output;
  }
  add_shortcode("highlight", "highlight_shortcode");
  
  
  
  
  
  function message_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
      'type' =>'info',
    ), $atts ) );
    $class = "message {$type}";
    $content = do_shortcode($content);
    $output = "<div class=\"{$class}\">{$content}</div>";
    return $output;
  }
  add_shortcode("message", "message_shortcode"); 
  
  
  
  
  
  
  
  
  
  
  function category_link_shortcode( $atts, $content = null ) { 
    extract( shortcode_atts( array(
      'name' =>'',
      ), $atts ) );
    
    $category_id = get_cat_ID( $name );
    if(empty($category_id)) return "";
    
    $category = get_category( $category_id );
    $category_name = $category->name;
    $category_link = get_category_link( $category_id );
    
    $output = "<a href={$category_link} title=\"{$category_name}\">{$category_name}</a>";
    
    return $output;
  }
  add_shortcode('category_link', 'category_link_shortcode');
  ?>