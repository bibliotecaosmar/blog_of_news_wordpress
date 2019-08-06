<?php

//Chama a tag title
function btwp_title_tag() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'btwp_title_tag');

// Previnir o erro na tag title em versões antigas
// (ta dando erro)
/*if (!function_exist('_wp_render_title_tag')) {
  function tng_render_title() {
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
  }
  add_action('wp_head', 'tng_render_title');
}*/

//Registrar navwalker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registrar menus
register_nav_menus( array(
  'principal' => __('Menu principal', 'btwp'),
));
