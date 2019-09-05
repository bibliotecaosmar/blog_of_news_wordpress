<?php

// Tag Tittle
function btwp_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-formats', array('aside', 'image'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'btwp_theme_support');

// Registrar o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrar o menu
register_nav_menus( array(
    'principal' => __('Menu principal', 'wswp')
));

// Sidebar
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="border border-primary">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="col mt-2 ml-2 sidebar">',
        'after_title' => '</h5><div class="text-primary">',
));