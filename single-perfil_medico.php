<?php get_header(); ?>
<main class="hero is-fullheight" id="perfil-medico">
  <div class="hero-nav">
    <?php get_template_part('components/nav', 'nav'); ?>
  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
    <h2 class="title">Perfil Médico</h2>
      <div class="columns is-paddingless">
        <?php while (have_posts()) : the_post(); ?>
          <div class="column is-9 is-offset-1">
            <article class="columns content">
              <div class="column is-4 is-offset-2 has-text-centered profile-pic">
                <?php the_post_thumbnail('medium'); ?>
                <p>
                  <a href="/corpo-clinico">
                    <span class="fa fa-angle-left"></span>
                    Voltar
                  </a>
                </p>
              </div>
              <div class="column has-text-left">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
