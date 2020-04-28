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


// Add base.php file

function yds_template_path()
{
    return Yds_Wrapping::$main_template;
}

function yds_template_base()
{
    return Yds_Wrapping::$base;
}

class Yds_Wrapping
{

    static $main_template;

    static $base;

    static function wrap($template)
    {
        self::$main_template = $template;
        self::$base = substr(basename(self::$main_template), 0, -4);
        if ('index' == self::$base)
            self::$base = false;
        $templates = array('base.php');
        if (self::$base)
            array_unshift($templates, sprintf('base-%s.php', self::$base));
        return locate_template($templates);
    }
}

add_filter('template_include', array('Yds_Wrapping', 'wrap'), 99);