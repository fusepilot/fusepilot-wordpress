<?php
  include_once 'geshi.php';

  //move wpautop filter to AFTER shortcode is processed
  remove_filter( 'the_content', 'wpautop' );
  add_filter( 'the_content', 'wpautop' , 99);
  //add_filter( 'the_content', 'shortcode_unautop',100 );
  
  function vimeo_embed_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(
        "id" => '',
        "width" => '700',
        "height" => '394'
    ), $atts));
  return '<iframe src="http://player.vimeo.com/video/'.$id.'?title=0&byline=0&portrait=0&color=ffffff" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
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
    if($language) $class = ' class="' . $language . '"';
    
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
    
    $code .= '<pre><code>';
    $code .= $content;
    $code .= '</code></pre>';
    return $code;
  }
  add_shortcode( 'code', 'code_shortcode');
?>