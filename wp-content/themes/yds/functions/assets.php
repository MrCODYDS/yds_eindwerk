<?php

// Load css
function load_assets() {
    wp_enqueue_style('main.css', get_stylesheet_directory_uri() . '/dest/main.css', array(), false);

    // Remove default jQuery (to remove it from header)
    wp_deregister_script('jquery');
    // Include default jQuery (and put it in footer)
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'));
    wp_enqueue_script('jquery', '', '', '', true);
}

add_action('wp_enqueue_scripts', 'load_assets');