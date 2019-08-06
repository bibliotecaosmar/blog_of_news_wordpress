<?php get_header(); ?>

<div class="container">

  <div class="background-img d-none d-lg-block d-xl-none"></div>

  <div class="container">
    <!-- Cover and logos-->
    <div class="row ml-0 pl-0 cover-theme bg-light">

      <div class="col-sm-10">

        <div class="col pt-2 pb-2">

          <img class="img-responsive" src="assets/logo1.jpg" alt="logo1">

        </div>

      </div>

      <div class="col-sm-2">

        <div class="col pt-2 pb-2 d-none d-sm-block">

          <img class="img-responsive" src="assets/logo2.jpg" alt="logo2">

        </div>

      </div>

    </div>

    <div class="row nav-theme">
      <!--Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
          wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
        </div>
      </nav>

    </div>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>



    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>

<?php get_footer(); ?>
