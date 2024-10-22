<?php
/*
Plugin Name: Event Custom Post Type
Description: Adds a custom post type for events.
Author: Qvinh
Version: 1.0
*/

function university_custom_post_types() {
    register_post_type('event', array(
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt', 'custom-fields'),
        'labels' => array(
            'name' => 'sự kiện',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-images-alt2'
    ));
}
add_action('init', 'university_post_types');