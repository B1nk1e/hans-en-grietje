<?php

/**
 * Add custom taxonomies
 */

namespace App;

function create_my_custom_taxonomies()
{
    register_taxonomy('faq-category', 'faq', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Categorie', 'sage'),
            'singular_name' => _x('Categorie', 'sage'),
            'search_items' => __('Zoek categorieen', 'sage'),
            'all_items' => __('Alle categorieen', 'sage'),
            'parent_item' => __('Parent categorie', 'sage'),
            'parent_item_colon' => __('Parent categorie:', 'sage'),
            'edit_item' => __('Categorie wijzigingen', 'sage'),
            'update_item' => __('Categorie wijzigingen', 'sage'),
            'add_new_item' => __('Categorie toevoegen', 'sage'),
            'new_item_name' => __('Categorie toevoegen', 'sage'),
            'menu_name' => __('Categorie', 'sage'),
        ),
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'category'),
    ));

    flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\create_my_custom_taxonomies');
