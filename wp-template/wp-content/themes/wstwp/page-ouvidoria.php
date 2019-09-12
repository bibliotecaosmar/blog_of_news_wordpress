<?php /* Template name: Ouvidoria Trabalhe Conosco*/ ?>
<?php get_header(); ?>

<!-- Sidebar e Formulário de Feedback -->
<div class="row mt-5 mr-5 mb-3">

  <div class="col-md-4 m-1 mb-5">
    
    <?php get_sidebar(); ?>
  
  </div>

  <div class="col-md-8 ml-3 mb-5">
        
    <div class="border border-primary" style="height: 45rem;">
    
      <div class="row">

        <div class="col ml-4 mr-4 mt-3">
          
          <h3>
            <?php the_title(); ?>
          </h3>
          <p>
            <?php the_content(); ?>
          </p>
        
        </div>

      </div>
    
    </div>
  
  </div>

</div>

<?php get_footer(); ?>