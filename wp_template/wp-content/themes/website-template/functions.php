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