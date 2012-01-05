<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
        'public' => true,
        'rewrite' => array('slug' => 'works', 'with_front' => false),
        'menu_position' => 5,
        'taxonomies' => array('category', 'post_tag')
        )
    );
}

?>