<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>

</head>

<body>

  <div class="container-fluid bg ml-0 mr-0 pl-0 pr-0">
    <!-- Cover -->
    <div class="cover"></div>

    <!-- Navbar -->
    <div class="row shadow mb-5 ml-0 mr-0 pl-0">

      <div class="col-4"></div>

      <div class="col-7">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="col-7 d-lg-none d-xl-block"></div>

          <div class="col-1">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

          </div>  
      
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
        
        </nav>
      
      </div>

    </div>