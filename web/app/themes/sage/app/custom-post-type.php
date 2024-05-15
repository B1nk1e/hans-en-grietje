<?php

/**
 * Register custom post type
 */

namespace App;

add_action('init', function () {
    register_post_type('arrangements', array(
        'labels' => array(
            'name' => __('Arrangementen'),
            'singular_name' => __('Arrangement'),
            'menu_name' => __('Arrangementen'),
            'name_admin_bar' => __('Arrangementen'),
            'all_items' => __( 'Alle arrangementen'),
            'add_new_item' => __( 'Arrangement toevoegen'),
            'add_new' => __( 'Arrangement toevoegen'),
            'new_item' => __( 'Arrangement toevoegen'),
            'edit_item' => __( 'Arrangement wijzigingen'),
            'update_item' => __( 'Arrangement wijzigingen'),
            'view_item' => __( 'Arrangement bekijken'),
            'view_items' => __( 'Arrangement bekijken'),
        ),
        'description' => 'Arrangementen',
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-editor-table',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'arrangements',
            'with_front' => true
        ),
    ));

    register_post_type('agenda', array(
        'labels' => array(
            'name' => __('Agenda', 'sage'),
            'singular_name' => __('Agenda', 'sage'),
            'menu_name' => __('Agenda', 'sage'),
            'name_admin_bar' => __('Agenda', 'sage'),
            'all_items' => __( 'Alle agenda', 'sage' ),
            'add_new_item' => __( 'Agenda toevoegen', 'sage' ),
            'add_new' => __( 'Agenda toevoegen', 'sage' ),
            'new_item' => __( 'Agenda toevoegen', 'sage' ),
            'edit_item' => __( 'Agenda wijzigingen', 'sage' ),
            'update_item' => __( 'Agenda wijzigingen', 'sage' ),
            'view_item' => __( 'Agenda bekijken', 'sage' ),
            'view_items' => __( 'Agenda bekijken', 'sage' ),
        ),
        'description' => 'agenda',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'agenda',
            'with_front' => true
        ),
    ));

    register_post_type('jobs', array(
        'labels' => array(
            'name' => __('Vacatures', 'sage'),
            'singular_name' => __('Vacature', 'sage'),
            'menu_name' => __('Vacatures', 'sage'),
            'name_admin_bar' => __('Vacature', 'sage'),
            'all_items' => __( 'Alle vacature', 'sage' ),
            'add_new_item' => __( 'Vacature toevoegen', 'sage' ),
            'add_new' => __( 'Vacature toevoegen', 'sage' ),
            'new_item' => __( 'Vacature toevoegen', 'sage' ),
            'edit_item' => __( 'Vacature wijzigingen', 'sage' ),
            'update_item' => __( 'Vacature wijzigingen', 'sage' ),
            'view_item' => __( 'Vacature bekijken', 'sage' ),
            'view_items' => __( 'Vacature bekijken', 'sage' ),
        ),
        'description' => 'jobs',
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-id',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'jobs',
            'with_front' => true
        ),
    ));

    flush_rewrite_rules(true);
});
