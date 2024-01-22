<?php

/**
 * Custom post types
 */

function custom_register_post_type() {
    $labels = array(
        'name'               => _x('Projects', 'projects', 'sage'),
        'singular_name'      => _x('Project', 'post type singular name', 'sage'),
        'menu_name'          => _x('Projects', 'admin menu', 'sage'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'sage'),
        'add_new'            => _x('Add New', 'project', 'sage'),
        'add_new_item'       => __('Add New Project', 'sage'),
        'new_item'           => __('New Project', 'sage'),
        'edit_item'          => __('Edit Project', 'sage'),
        'view_item'          => __('View Project', 'sage'),
        'all_items'          => __('All Projects', 'sage'),
        'search_items'       => __('Search Projects', 'sage'),
        'parent_item_colon'  => __('Parent Projects:', 'sage'),
        'not_found'          => __('No projects found.', 'sage'),
        'not_found_in_trash' => __('No projects found in Trash.', 'sage')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => _x('projets', 'URL slug for projects in French', 'sage')),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'thumbnail'),
    );

    register_post_type('project', $args);
}

add_action('init', 'custom_register_post_type');
