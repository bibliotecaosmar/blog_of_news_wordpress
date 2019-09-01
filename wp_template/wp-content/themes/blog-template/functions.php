<?php

// Tag Tittle
function btwp_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-formats', array('aside', 'image'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'btwp_theme_support');
