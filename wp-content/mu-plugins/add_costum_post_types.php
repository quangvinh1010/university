<?php


function university_post_types() 
{
  
  register_post_type('event', array(
    'show_in_rest' => true,
    'public' => true, 
    'has_archive' => true,
    'taxonomies' => ['category_event'],
    'rewrite' => array('slug' => "su-kien"),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt',  'custom-fields'),
    'labels' => array(  
      'name' => 'Events', 
      'add_new_item' => 'Add New Event', 
      'edit_item' => 'Edit Event', 
      'all_items' => 'All Events', 
      'singular_name' => 'Event'  
    ),  
      'menu_icon' => 'dashicons-images-alt2'
  ));
  register_post_type('programs', array(
    'show_in_rest' => true,
    'public' => true, 
    'has_archive' => true,
    'taxonomies' => ['category_event'],
    'rewrite' => array('slug' => "su-kien"),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt',  'custom-fields'),
    'labels' => array(  
      'name' => 'Programs', 
      'add_new_item' => 'Add New Event', 
      'edit_item' => 'Edit Event', 
      'all_items' => 'All Events', 
      'singular_name' => 'Event'  
    ),  
      'menu_icon' => 'dashicons-editor-paragraph'
  ));
  register_post_type('professors', array(
    'show_in_rest' => true,
    'public' => true, 
    'has_archive' => true,
    'taxonomies' => ['category_event'],
    'rewrite' => array('slug' => "su-kien"),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt',  'custom-fields'),
    'labels' => array(  
      'name' => 'Professors', 
      'add_new_item' => 'Add New Event', 
      'edit_item' => 'Edit Event', 
      'all_items' => 'All Events', 
      'singular_name' => 'Event'  
    ),  
      'menu_icon' => 'dashicons-welcome-learn-more'
  ));
  }  
add_action('init', 'university_post_types');
