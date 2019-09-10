<?php get_header(); ?>

<?php if (is_category('Atualizacoes')) : ?>

  <h3><?php the_title(); ?></h3>
  
  <p>Category: <?php single_cat_title(); ?></p>
  
  <p><?php the_content(); ?></p>

<?php else : get_404_template(); endif; ?>

<?php get_footer(); ?>