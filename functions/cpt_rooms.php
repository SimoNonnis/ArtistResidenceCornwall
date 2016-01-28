<?php
/**
 * Rooms custom post type
 */

add_action( 'init', 'register_cpt_room' );

function register_cpt_room() {

    $labels = array( 
        'name' => _x( 'Rooms', 'room' ),
        'singular_name' => _x( 'Room', 'room' ),
        'add_new' => _x( 'Add New', 'room' ),
        'add_new_item' => _x( 'Add New Room', 'room' ),
        'edit_item' => _x( 'Edit Room', 'room' ),
        'new_item' => _x( 'New Room', 'room' ),
        'view_item' => _x( 'View Room', 'room' ),
        'search_items' => _x( 'Search Rooms', 'room' ),
        'not_found' => _x( 'No rooms found', 'room' ),
        'not_found_in_trash' => _x( 'No rooms found in Trash', 'room' ),
        'parent_item_colon' => _x( 'Parent Room:', 'room' ),
        'menu_name' => _x( 'Rooms', 'room' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Rooms of the Hotel',
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        //'taxonomies' => array( 'category', 'page-category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'room'),
        'capability_type' => 'post'
    );

    register_post_type( 'room', $args );
}
 