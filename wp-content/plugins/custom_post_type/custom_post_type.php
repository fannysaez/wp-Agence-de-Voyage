<?php
/*
* Plugin Name: Custom Post Type - Projets
* Description: Créer un plugin qui permet d'ajouter un nouveau custom post type en lien avec le thème de votre site. Déclare un Custom Post Type "Projet" + taxonomie personnalisée.
* Version: 1.1
* Author: Fanny
*/

// Custom Post Type : Projet
function perso_post_type(){
    $labels = array(
        'name'                  => 'Projets',
        'singular_name'         => 'Projet',
        'menu_name'             => 'Projets',
        'name_admin_bar'        => 'Projet',
        'add_new'               => 'Ajouter un nouveau',
        'add_new_item'          => 'Ajouter un nouveau projet',
        'new_item'              => 'Nouveau projet',
        'edit_item'             => 'Modifier le projet',
        'view_item'             => 'Voir le projet',
        'all_items'             => 'Tous les projets',
        'search_items'          => 'Rechercher des projets',
        'not_found'             => 'Aucun projet trouvé',
        'not_found_in_trash'    => 'Aucun projet dans la corbeille'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projet'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('projet', $args);
}
add_action('init', 'perso_post_type');

// // Taxonomie personnalisée : Type de projet
// function perso_taxonomy() {
//     $labels = array(
//         'name'              => 'Types de projets',
//         'singular_name'     => 'Type de projet',
//         'search_items'      => 'Rechercher un type',
//         'all_items'         => 'Tous les types',
//         'edit_item'         => 'Modifier le type',
//         'update_item'       => 'Mettre à jour le type',
//         'add_new_item'      => 'Ajouter un nouveau type',
//         'new_item_name'     => 'Nom du nouveau type',
//         'menu_name'         => 'Type de projet',
//     );

//     $args = array(
//         'hierarchical'      => true, // true = catégorie / false = étiquette
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'rewrite'           => array('slug' => 'type-projet'),
//         'show_in_rest'      => true,
//     );

//     register_taxonomy('type_projet', array('projet'), $args);
// }
// add_action('init', 'perso_taxonomy');
