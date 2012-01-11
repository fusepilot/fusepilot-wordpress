<?php

add_filter('wp_die_handler', 'get_my_custom_die_handler');

function get_my_custom_die_handler() {
    return 'my_custom_die_handler';
}

function my_custom_die_handler($message, $title='', $args=array()) {
 $errorTemplate = get_theme_root().'/'.get_template().'/comment_errors.php';
 if(!is_admin() && file_exists($errorTemplate)) {
    $defaults = array( 'response' => 500 );
    $r = wp_parse_args($args, $defaults);
    $have_gettext = function_exists('__');
    if ( function_exists( 'is_wp_error' ) && is_wp_error( $message ) ) {
        if ( empty( $title ) ) {
            $error_data = $message->get_error_data();
            if ( is_array( $error_data ) && isset( $error_data['title'] ) )
                $title = $error_data['title'];
        }
        $errors = $message->get_error_messages();
        switch ( count( $errors ) ) :
        case 0 :
            $message = '';
            break;
        case 1 :
            $message = "{$errors[0]}";
            break;
        default :
            $message = "<ul>\n\t\t<li>" . join( "</li>\n\t\t<li>", $errors ) . "</li>\n\t</ul>";
            break;
        endswitch;
    } elseif ( is_string( $message ) ) {
        $message = "$message";
    }
    
    if ( empty($title) )
        $title = $have_gettext ? __('WordPress &rsaquo; Error') : 'WordPress &rsaquo; Error';
    require_once($errorTemplate);
    die();
 } else {
    _default_wp_die_handler($message, $title, $args);
 }
}

?>