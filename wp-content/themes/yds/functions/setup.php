<?php

// Theme Setup

add_theme_support('menus');

add_action('after_setup_theme', function () {

    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'yds'),
        'footer_navigation' => __('Footer Navigation', 'yds'),
    ]);

    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');

});