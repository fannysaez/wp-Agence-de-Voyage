<?php
/*
* Plugin Name: Custom Roles
 * Description: Clone le rôle 'voyageurs' en 'super_voyageurs' avec des permissions supplémentaires.
 * Version: 1.0
 * Author: Fanny
*/

function add_role_super_voyageurs() {
// Récupère le rôle 'moderateur'
$moderateur = get_role('modrateur');

// Si le rôle existe, on clone ses permissions
    if ($moderateur) {
        add_role('super_voyageurs', 'Super Voyageurs', $moderateur->capabilities);
    }
}

// Ajout automatique lors de l'initialisation
add_action('init', 'add_role_super_voyageurs');

function remove_role_super_voyageurs() {

    remove_role('super_voyageurs');
}

// Suppression lors de la désactivation du plugin
register_deactivation_hook(__FILE__, 'remove_role_super_voyageurs');