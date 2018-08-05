<?php

function create_schedule_carousel_post_type()
{
    register_post_type('chedule-carousel', array(
        'labels' => array(
            'name' => __('Slide', 'chedule-carousel'),
            'singular_name' => __('Slide', 'chedule-carousel'),
            'menu_name' => __('Schedule Carousel', 'chedule-carousel'),
            'add_new' => __('New Slide', 'chedule-carousel'),
            'add_new_item' => __('Add New Slide', 'chedule-carousel'),
            'edit' => __('Edit', 'chedule-carousel'),
            'edit_item' => __('Edit Slide', 'chedule-carousel'),
            'new_item' => __('New Slide', 'chedule-carousel'),
            'view' => __('View', 'chedule-carousel'),
            'view_item' => __('View Slide', 'chedule-carousel'),
            'search_items' => __('Search Post', 'chedule-carousel'),
            'not_found' => __('Not found Slides', 'chedule-carousel'),
            'not_found_in_trash' => __('Not found items in trash', 'chedule-carousel')
        ),
        'menu_position' => 6,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'rewrite' => false,
        'hierarchical' => false,
        'menu_icon' => "dashicons-star-filled",
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));
}
add_action('init', 'create_schedule_carousel_post_type');