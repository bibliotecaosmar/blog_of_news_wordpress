<?php /* Template name: Ouvidoria */ ?>
<?php get_header(); ?>

<!-- Sidebar e Formulário de Feedback -->
<div class="row mt-5 mr-5 mb-3">

  <?php get_sidebar(); ?>

  <div class="col-md-8 ml-3 mb-5">
        
    <div class="border border-primary" style="height: 45rem;">
    
      <div class="row">
    
        <div class="col ml-4 mr-4 mt-3">
          
          <h3>Upload Currículo:</h3><br>

          <form enctype="multipart/form-data">

            <input type="file"><br>

            <input class="btn btn-primary mt-1" type="submit">

          </form>

        </div>
    
      </div>
    
    </div>
  
  </div>

</div>

<?php get_footer(); ?>