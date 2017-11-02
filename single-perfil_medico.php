<?php get_header(); ?>

<?php get_template_part('components/nav', 'nav'); ?>

<div class="hero is-medium is-primary">	
  <img src="http://dummyimage.com/1920x500/4d494d/686a82.PNG&text=Banner+Placeholder" alt="placeholder+image">
</div>

<main class="hero is-medium">
  <div class="section has-text-centered">
    <header><h1 class="title">Corpo clínico - Perfil Médico</h1></header>
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
