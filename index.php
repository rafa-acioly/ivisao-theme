<?php get_header(); ?>

<?php get_template_part('components/nav', 'nav'); ?>

<main class="hero hero-content-body">
  <div class="hero-side-menu is-hidden-mobile">
    <div class="hero-menu-item">
      <div class="hero-menu-img">
        <a href=""><img class="image" src="<?= get_template_directory_uri(); ?>/assets/images/doctor-icon.png" alt="ilustração de desenho de médico"></a>
      </div>
      <div class="hero-menu-content has-text-left">
        <a href=""><h2 class="title is-5">Área médica</h2></a>
        <h3 class="subtitle is-7">Área restrira para profissionais</h3>
      </div>
    </div>
    <div class="hero-menu-item">
      <div class="hero-menu-img">
        <a href="">
          <img class="image" src="<?= get_template_directory_uri(); ?>/assets/images/calendar-icon.png" alt="ilustração de desenho de calendário">
        </a>
      </div>
      <div class="hero-menu-content has-text-left">
        <a href=""><h2 class="title is-5">Pré-agendamento</h2></a>
        <h3 class="subtitle is-7">Consulta e exames</h3>
      </div>
    </div>
  </div>
  <div class="is-hidden-mobile">
    <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
  </div>
  <div class="is-hidden-desktop">
    <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
  </div>
</main>
<?php get_footer(); wp_footer(); ?>
</body>
</html>
