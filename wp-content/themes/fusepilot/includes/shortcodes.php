<?php
function vimeo_embed($atts, $content = null) {
    extract(shortcode_atts(array(
        "id" => '',
        "width" => '700',
        "height" => '394'
    ), $atts));
return '<iframe src="http://player.vimeo.com/video/'.$id.'?title=0&byline=0&portrait=0&color=ffffff" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
}
add_shortcode("vimeo", "vimeo_embed");

?>