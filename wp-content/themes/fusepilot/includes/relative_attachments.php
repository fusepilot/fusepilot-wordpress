<?php 

function fusepilot_get_relative_attachment_path($path)
{
    $paths = (object)parse_url($path);
    return $paths->path;
}

function fusepilot_wp_handle_upload($info)
{
    $info['url'] = fusepilot_get_relative_attachment_path($info['url']);
    return $info;
}
add_filter('wp_handle_upload', 'fusepilot_wp_handle_upload');

function fusepilot_wp_get_attachment_url($url)
{
    return fusepilot_get_relative_attachment_path($url);
}
add_filter('wp_get_attachment_url', 'fusepilot_wp_get_attachment_url');

?>