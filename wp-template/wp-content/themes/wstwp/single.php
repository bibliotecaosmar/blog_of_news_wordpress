<?php get_header(); ?>

<div class="row pb-5 ml-5 mr-5">

  <div class="col-md mt-4 mr-0 pr-0">

    <a href="<?php the_permalink();; ?>">
    
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

      <?php endwhile; ?>
    
      <?php else : get_404_template(); endif; ?>
      
    </a>
    
  </div>

<?php get_footer(); ?>