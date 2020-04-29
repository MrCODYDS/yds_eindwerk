<?php

/**
 * Gutenberg blocks setup
 */

$yds_blocks = array(

    /**
     * Default blocks
     */
    array(
        'name' => 'block-editor',
        'title' => __('Block Editor'),
        'description' => __('A default editor block'),
        'category' => 'yds-default',
        'icon' => 'edit',
    ),
    array(
        'name' => 'block-cta',
        'title' => __('Block CTA'),
        'description' => __('A default cta block'),
        'category' => 'yds-default',
        'icon' => 'megaphone',
    ),
    array(
        'name' => 'block-flex',
        'title' => __('Block Flex'),
        'description' => __('A default flex block'),
        'category' => 'yds-default',
        'icon' => 'tagcloud',
    ),
    array(
        'name' => 'block-editor',
        'title' => __('Block Editor'),
        'description' => __('A default editor block'),
        'category' => 'yds-default',
        'icon' => 'edit',
    ),
    array(
        'name' => 'block-hero',
        'title' => __('Block Hero'),
        'description' => __('A default hero block.'),
        'category' => 'yds-default',
        'icon' => 'image-filter',
    ),

);

/**
 * Create Gutenberg blocks
 */

add_action('acf/init', 'yds_acf_init');
function yds_acf_init()
{
    if (function_exists('acf_register_block_type')) {
        global $yds_blocks;
        if (is_array($yds_blocks) || is_object($yds_blocks)) {
            global $yds_blocks;
            foreach ($yds_blocks as $yds_block) {
                acf_register_block_type(array(
                    'name' => $yds_block['name'],
                    'title' => $yds_block['title'],
                    'description' => $yds_block['description'],
                    'keywords' => explode(' ', $yds_block['description']),
                    'category' => $yds_block['category'],
                    'render_callback' => 'yds_block_render_callback',
                    'icon' => $yds_block['icon'],
                    'mode' => 'edit',
                    'supports' => array('align' => false),
                ));
            }
        }
    }
}

/**
 * Create block-category
 */

add_filter('block_categories', 'yds_block_categories', 10, 2);
function yds_block_categories($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'yds-default',
                'title' => __('Yds Default Blocks', 'yds'),
                'icon' => 'wordpress',
            ),
            array(
                'slug' => 'yds-custom',
                'title' => __('Yds Custom Blocks', 'yds'),
                'icon' => 'wordpress',
            ),
        )
    );
}

/**
 * Create block render callback
 */

function yds_block_render_callback($block)
{
    $name = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("/templates/blocks/{$name}.php"))) {
        include(get_theme_file_path("/templates/blocks/{$name}.php"));
    }
}

/**
 * Enable only yds-blocks
 */

add_filter('allowed_block_types', 'my_function');
function my_function($allowed_block_types)
{
    $allowed_block_types = array('core/block');
    global $yds_blocks;
    foreach ($yds_blocks as $yds_block) {
        array_push($allowed_block_types, 'acf/' . $yds_block['name']);
    }

    return $allowed_block_types;
}
