<?php

include_once 'functions/setup.php';
include_once 'functions/assets.php';


/*
 * Add Base.php file
 */

function intracto_template_path()
{
    return Intracto_Wrapping::$main_template;
}

function intracto_template_base()
{
    return Intracto_Wrapping::$base;
}

class Intracto_Wrapping
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

add_filter('template_include', array('Intracto_Wrapping', 'wrap'), 99);