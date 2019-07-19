<?php get_header(); ?>

    <div class="container">

      <div class="row my-5 align-items-center">

        <div class="col-md-8 col-sm-12">
          <h1>Meu primeiro tema</h1>
          <p class="lead">Fiz com WordPress</p>
        </div>

        <div class="col-md-4 col-sm-12">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="O que procura?">
              <div class="input-group-append">
                <button class="btn btn-my-color-2" type="button">Buscar</button>
              </div>
            </div>
          </form>
        </div>

      </div>

      <div class="row">

        <div class="col mb-5">

          <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-1 rounded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="meuNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Perfil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Projetos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Novidades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Planos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Contatos</a>
                </li>
              </ul>
            </div>
          </nav>

        </div>

      </div>

      <div class="row">

        <div class="col-md-8 col-sm-12">
          <?php if(have_posts() : while(have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h3 class="mb-3 pb-2 border-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="row">
              <div class="col-md-12 col-lg-6 mb-3">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thubmail(); ?>
                </a>
              </div>
              <div class="col-md-12 col-lg-6 mb-3">
                <?php the_except(); ?>
              </div>
            </div>
            <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
          </div>

          <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>
          <div class="col-md-12 col-lg-6 mb-3">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde eum repellat, facere, ipsa dolor a pariatur quod voluptatem soluta maiores ea labore, vel quasi facilis aut? Rem consequatur architecto ea quasi qui ullam quaerat sit nostrum, necessitatibus error laboriosam? Corporis eos mollitia, reprehenderit nesciunt vitae magni ducimus voluptatem rem cumque.</p>
          </div>
          <div>
            <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y') ?>/span></p>
          </div>

          <div class="blog-pagination mb-5">
            <a href="" class="btn btn-outline-my-color-5">Mais antigos</a> <a href="" class="btn btn-outline-my-color-5">Mais novos</a>
          </div>

        </div>

        <?php get_sidebar(); ?>
      </div>

    </div>

    <div class="w-100 bg-secondary border-top border-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col py-5 text-center text-white">
            <h5>Meu primeiro tema de WordPress</h5>
            <p class="mb-0">Feito por mim com muita dedicação e esforço</p>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
