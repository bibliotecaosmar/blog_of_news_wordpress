<?php

// Chamam a tag title
function btwp_title_tag() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'btwp_title_tag');

// Previnir o erro na tag title em versões antigas
if (!function('_wp_render_title_tag')) {
  function btwp_render_title() {
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
  }
  add_action('wp_head', 'btwp_render_title');
}

?>
