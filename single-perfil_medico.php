<?php get_header(); ?>

<?php get_template_part('components/nav', 'nav'); ?>

<div class="hero is-medium is-primary">
  <div class="hero-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>

<main class="hero is-medium">
  <div class="section has-text-centered">
    <h1 class="title">Corpo clínico - Perfil Médico</h1>
    <div class="columns is-paddingless">
      <?php while (have_posts()) : the_post(); ?>
        <div class="column is-9 is-offset-1">
          <article class="columns content">
            <div class="column is-4 is-offset-2 has-text-centered profile-pic">
              <?php the_post_thumbnail('medium'); ?>
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
</main>

<?php get_footer(); ?>
