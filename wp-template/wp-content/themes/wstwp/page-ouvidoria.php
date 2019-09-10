<?php /* Template name: Ouvidoria */ ?>
<?php get_header(); ?>

<!-- Sidebar e Formulário de Feedback -->
<div class="row mt-5 mr-5 mb-3">

  <?php get_sidebar(); ?>

  <!-- Form -->
  <div class="col-md-8 ml-3 mb-5">

    <div class="border border-primary mt-3" style="height: 45rem; min-width: 400px;">

      <div class="row ml-1 mt-4">

        <div class="col">

          <form>
            <h3>Formulário: </h3>
            <div class="row">
              <div class="col">
                <input type="text" style="width: 90%; height: 15rem; min-width: 120px;"><br>
                <button class="btn btn-primary button-default" type="submit">Enviar</button>
              </div>
            </div>
          </form>

        </div>

      </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>