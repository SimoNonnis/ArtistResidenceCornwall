<?php
/**
 * Rooms -- custom categories
 */

add_action( 'init', 'register_taxonomy_room_types' );

function register_taxonomy_room_types() {

    $labels = array( 
        'name' => _x( 'Room types', 'room_types' ),
        'singular_name' => _x( 'Room type', 'room_types' ),
        'search_items' => _x( 'Search Room types', 'room_types' ),
        //'popular_items' => _x( 'Popular Room types', 'room_types' ),
        'all_items' => _x( 'All Room types', 'room_types' ),
        'parent_item' => _x( 'Parent Room type', 'room_types' ),
        'parent_item_colon' => _x( 'Parent Room type:', 'room_types' ),
        'edit_item' => _x( 'Edit Room type', 'room_types' ),
        'update_item' => _x( 'Update Room type', 'room_types' ),
        'add_new_item' => _x( 'Add New Room type', 'room_types' ),
        'new_item_name' => _x( 'New Room type', 'room_types' ),
        //'separate_items_with_commas' => _x( 'Separate room types with commas', 'room_types' ),
        'add_or_remove_items' => _x( 'Add or remove Room types', 'room_types' ),
        //'choose_from_most_used' => _x( 'Choose from most used Room types', 'room_types' ),
        'menu_name' => _x( 'Room types', 'room_types' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'room_types', array('room'), $args );
    flush_rewrite_rules();
}