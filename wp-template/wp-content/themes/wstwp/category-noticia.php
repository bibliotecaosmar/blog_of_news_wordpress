<?php get_header(); ?>

<?php if (is_category('Novidade')) : ?>
  
  <?php the_title(); ?>
    
  <p>Category: <?php single_cat_title(); ?></p>
  
  <?php the_content(); ?>

  <?php else : get_404_template(); endif; ?>

<?php get_footer(); ?>