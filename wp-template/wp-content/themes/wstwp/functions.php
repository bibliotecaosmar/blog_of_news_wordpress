<?php
/**
 * ===========================================
 * Tag Tittle
 * ===========================================
 */
function wstwp_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array( 'aside', 'image' ) );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'wstwp_theme_support' );

/**
 * ===========================================
 * Navigation Walker
 * ===========================================
 */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'principal' => __( 'Menu principal', 'wstwp' )
));

/**
 * ===========================================
 * Sidebar
 * ===========================================
 */
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="border border-primary">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="col mt-2 ml-2 sidebar">',
        'after_title' => '</h5><div class="text-primary">',
    ) );
    
/**
 * ===========================================
 * Post
 * ===========================================
 */
// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1280, 1280, true );


add_filter( 'excerpt_length', function( $length ) {
    return 20;
} );

/**
 * ===========================================
 * Pagination
 * ===========================================
 */
add_filter( 'next_posts_link_attributes', 'posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'posts_link_attributes' );

function posts_link_attributes() {
    return 'class="btn btn-outline-my-color-2"';
}