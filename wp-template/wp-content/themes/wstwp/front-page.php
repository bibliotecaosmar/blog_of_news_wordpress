<?php get_header(); ?>

<!-- Destaques -->
<div class="row pb-5 ml-5 mr-5">

  <?php

  $args = array(
    'post_type'       => 'post',
    'category_name'   => 'destaques',
    'posts_per_page'  => 2
  );

  $query = new WP_Query($args);

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 
  
  ?>

    <div class="col-md mt-4">
      <a href="<?php the_permalink(); ?>" class="post-img" alt="">
        <div class="card bg-main-post text-light post">
           <div class="card-body" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
            <h5 class="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </h5>
            <p class="card-text">
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>
      </a>
    </div>
    
  <?php endwhile; ?>

  <?php else : get_404_template(); endif; ?>

</div>
 
<!-- Main Posts -->
<div class="row ml-5 mb-5">

  <?php 
  
  $args = array(
    'post_type'       => 'post',
    'cat'             => 1,
    'posts_per_page'  => 3
  );

  $query = new WP_Query($args);

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 
  
  ?>
          
    <div class="col-md mt-4 mr-0 pr-0">

      <a href="<?php the_permalink(); ?>">
        <div class="card bg-main-post text-light" style="width: 14rem; height:10rem;">
          <h5 class="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </h5>
          <p class="card-text">
            <?php the_excerpt(); ?>
          </p>
        </div>
      </a>

    </div>
  
  <?php endwhile; ?>

  <?php else : get_404_template(); endif; ?>
  
</div>

<!-- Novidades -->
<?php

$args = array(
  'post_type'       => 'post',
  'category_name'   => 'atualizacoes',
  'posts_per_page'  => 3
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

            <div class="col-3 bg-secondary" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>

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

<?php get_footer(); ?>