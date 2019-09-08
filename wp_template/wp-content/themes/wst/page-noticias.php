<?php /* Template name: Notícias */ ?>
<?php get_header(); ?>

<!-- Novidades -->
<div class="row">

  <?php 
  
  $args = array(
    'cat'             => 5,
    'posts_per_page'  => 4
  );

  $query = new WP_Query($args);

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
  
  ?>
    
    <div class="col-2"></div>

    <div class="col-8 mb-4">

      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title text-primary">TheprimeThanatos perde show</h5>
          <p class="card-text">TheprimeThanatos esquece seu pendrive no aeroporto e perde apresentação no loolapaluza, o ano é 2044.</p>
        </div>
      </div>

    </div>

    <div class="col-2"></div>

  <?php endwhile; ?>
  
  <?php else : get_404_template(); endif; ?>
  
</div>

<?php get_footer(); ?>