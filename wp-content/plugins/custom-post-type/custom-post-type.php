<?php
/*
* Plugin Name: Custom Post Type - Design
* Description: Créer un plugin qui permet d'ajouter un nouveau custom post type pour des designs, avec une taxonomie personnalisée.
* Version: 1.1
* Author: Fanny
*/

// Custom Post Type : Design
function perso_post_type_design(){
    $labels = array(
        'name'                  => 'Designs',
        'singular_name'         => 'Design',
        'menu_name'             => 'Designs',
        'name_admin_bar'        => 'Design',
        'add_new'               => 'Ajouter un nouveau',
        'add_new_item'          => 'Ajouter un nouveau design',
        'new_item'              => 'Nouveau design',
        'edit_item'             => 'Modifier le design',
        'view_item'             => 'Voir le design',
        'all_items'             => 'Tous les designs',
        'search_items'          => 'Rechercher des designs',
        'not_found'             => 'Aucun design trouvé',
        'not_found_in_trash'    => 'Aucun design dans la corbeille'
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'design'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-image',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true
    );

    register_post_type('design', $args);
}
add_action('init', 'perso_post_type_design');

// Taxonomie personnalisée : Type de design
function perso_taxonomy_design() {
    $labels = array(
        'name'              => 'Types de designs',
        'singular_name'     => 'Type de design',
        'search_items'      => 'Rechercher un type',
        'all_items'         => 'Tous les types',
        'edit_item'         => 'Modifier le type',
        'update_item'       => 'Mettre à jour le type',
        'add_new_item'      => 'Ajouter un nouveau type',
        'new_item_name'     => 'Nom du nouveau type',
        'menu_name'         => 'Type de design',
    );

    $args = array(
        'hierarchical'      => true, // true = catégorie / false = étiquette
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'type-design'),
        // 'show_in_rest'      => true,
    );

    register_taxonomy('type_design', array('design'), $args);
}
add_action('init', 'perso_taxonomy_design');
