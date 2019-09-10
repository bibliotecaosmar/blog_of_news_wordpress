<?php /* Template name: Notícias */ ?>
<?php get_header(); ?>

<!-- Notícias -->
<div class="row">

  <?php 
  
  $args = array(
    'post_type'       => 'post',
    'category_name'   => 'Notícias',
    'posts_per_page'  => 6
  );

  $query = new WP_Query($args);

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
  
  ?>
  
    <div class="row">
  
      <div class="col-md-2" style="height: 4px;"></div>
  
      <div class="col-md-8 mb-0 mt-0 pb-0 pt-0" style="height: 13rem;">
  
        <div id="novidades" class="card">
          <div class="card-body">
  
            <div class="row ml-1 mr-1 mb-1 mt-1">
    
              <div class="col-3 bg-secondary ">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')) ?>
              </div>
  
              <div class="col-9">
  
                <h5 class="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </h5>
                <p class="card-text">
                  <?php the_excerpt(); ?>
                </p>
  
              </div>
  
            </div>
  
          </div>
        </div>
  
      </div>
  
      <div class="col-md-2"></div>
  
    </div>
  
  <?php endwhile; ?>
    
  <?php else : get_404_template(); endif; ?>
  
</div>
  
<?php get_footer(); ?>