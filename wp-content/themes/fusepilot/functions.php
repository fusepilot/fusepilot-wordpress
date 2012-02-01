<?php

require_once("includes/shortcodes.php");
require_once("includes/post_types.php");
require_once("includes/comment_errors.php");
require_once("includes/theme_options.php");
require_once("includes/flash.php");
require_once("includes/social.php");

// setup settings
global $settings;
$settings = get_option('fusepilot_theme_options');

// translations can be filed in the /languages/ directory
load_theme_textdomain('html5reset', TEMPLATEPATH . '/languages');

$locale      = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

// add rss links
add_theme_support('automatic-feed-links');

// get nivo gallery ready for use
function fusepilot_enqueue_scripts()
{
    wp_register_script('flex', get_template_directory_uri() . "/js/jquery.flexslider-min.js");
}
add_action('wp_enqueue_scripts', 'fusepilot_enqueue_scripts');

// clean head
function removeHeadLinks()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Sidebar Widgets', 'html5reset'),
        'id' => 'sidebar-widgets',
        'description' => __('These are widgets for the sidebar.', 'html5reset'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

function has_attached_media() {
    if( get_field('gallery') || get_field('teaser') || get_field('vimeo_id') ) return true;
}

// function to set active style links that match a param
function the_active_param($param, $value, $output = "active", $default = false)
{
    echo $_GET[$param] == $value || (empty($_GET[$param]) && $default) ? $output : "";
}

// format date
function format_date($date)
{
    $w3c_date    = date(DATE_W3C, strtotime($date));
    $styled_date = date('M jS Y \a\t h:ia', strtotime($date));
    return "<time datetime=\"{$w3c_date}\" pubdate class=\"updated\">{$styled_date}</time>";
}

// clean dashboard
function remove_dashboard_widgets()
{
    global $wp_meta_boxes;
    
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// function to allow current page menu highlighting
function is_page_current($page_id)
{
    $page        = get_page($page_id);
    $page_slug   = $page->post_name;
    $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $uri         = str_replace(site_url(), '', $current_url);
    
    $match = "/^\/{$page_slug}/i";
    if (preg_match($match, $uri)) {
        return 1;
    } else {
        return 0;
    }
}

// set flash for comment accepted or not 
function fusepilot_wp_insert_comment_hook($id)
{
    $comment = get_comment($id);
    
    if ($comment->comment_approved) {
        set_flash("comment_accepted", 1);
    } else {
        set_flash("comment_needs_moderation", 1);
    }
    
}
add_action('wp_insert_comment', 'fusepilot_wp_insert_comment_hook');

// test for content
function get_content()
{
    global $post;
    if (!empty($post->post_content)) {
        return $post->post_content;
    }
}

// only show pagination if pages are greater than 1
function show_pagination()
{
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}

//show project with posts in taxonomy
function add_projects_to_query($query)
{
    if ($query->is_category || $query->is_tag)
        $query->set('post_type', array(
            'post',
            'project'
        ));
    return $query;
}
add_filter('pre_get_posts', 'add_projects_to_query');

// set up image sizes
add_image_size("gallery", 700, 394, true);
add_image_size("masonry-triple", 700, 160, true);
add_image_size("masonry-double", 466, 160, true);
add_image_size("masonry-single", 233, 160, true);
add_image_size("teaser", 700, 80, true);

?>