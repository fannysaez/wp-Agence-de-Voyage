<?php

/**
 * Plugin Name: Custom CSS and JS
 * Description: Un plugin pour charger un CSS et un JS sur toutes les pages front-end.
 * Version: 1.0
 * Author: Fanny
 */

function add_custom_style_and_js()
{
    // CSS
    wp_enqueue_style(
        'custom_style_and_js',
        plugin_dir_url(__FILE__) . 'css/custom_style.css',
    );

    // JS
    wp_enqueue_script(
        'custom_style_and_js',
        plugin_dir_url(__FILE__) . 'js/custom_script.js',
        [],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'add_custom_style_and_js');
