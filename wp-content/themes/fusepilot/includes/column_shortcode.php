<?php

function one_third_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'one_third_column_shortcode');

function one_third_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_third_last', 'one_third_last_column_shortcode');

function two_third_column_shortcode( $atts, $content = null ) {
   return '<div class="column two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third_column_shortcode');

function two_third_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('two_third_last', 'two_third_last_column_shortcode');

function one_half_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'one_half_column_shortcode');

function one_half_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_half_last', 'one_half_last_column_shortcode');

function one_fourth_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'one_fourth_column_shortcode');

function one_fourth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_fourth_last', 'one_fourth_last_column_shortcode');

function three_fourth_column_shortcode( $atts, $content = null ) {
   return '<div class="column three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth_column_shortcode');

function three_fourth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('three_fourth_last', 'three_fourth_last_column_shortcode');

function one_fifth_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'one_fifth_column_shortcode');

function one_fifth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_fifth_last', 'one_fifth_last_column_shortcode');

function two_fifth_column_shortcode( $atts, $content = null ) {
   return '<div class="column two_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fifth', 'two_fifth_column_shortcode');

function two_fifth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('two_fifth_last', 'two_fifth_last_column_shortcode');

function three_fifth_column_shortcode( $atts, $content = null ) {
   return '<div class="column three_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fifth', 'three_fifth_column_shortcode');

function three_fifth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('three_fifth_last', 'three_fifth_last_column_shortcode');

function four_fifth_column_shortcode( $atts, $content = null ) {
   return '<div class="column four_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_fifth', 'four_fifth_column_shortcode');

function four_fifth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('four_fifth_last', 'four_fifth_last_column_shortcode');

function one_sixth_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'one_sixth_column_shortcode');

function one_sixth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_sixth_last', 'one_sixth_last_column_shortcode');

function five_sixth_column_shortcode( $atts, $content = null ) {
   return '<div class="column five_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixth', 'five_sixth_column_shortcode');

function five_sixth_last_column_shortcode( $atts, $content = null ) {
   return '<div class="column five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('five_sixth_last', 'five_sixth_last_column_shortcode');

function columns_shortcode( $atts, $content = null ) {
   return '<div class="columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('columns', 'columns_shortcode');

?>