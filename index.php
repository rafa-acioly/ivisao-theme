<?php get_header(); ?>

<?php get_template_part('components/nav', 'nav'); ?>

<main class="hero hero-content-body is-hidden-mobile">
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
</main>
<div class="hero is-fullheight hero-mobile-view is-hidden-tablet">
  <img src="https://source.unsplash.com/350x700/?nature,water" alt="">
  <div class="hero-foot">
    <!-- <div class="hero-side-menu">
      <div class="hero-menu-item">
        <div class="hero-menu-img">
          <a href=""><img class="image" src="<?php // get_template_directory_uri(); ?>/assets/images/doctor-icon.png" alt="ilustração de desenho de médico"></a>
        </div>
        <div class="hero-menu-content has-text-left">
          <a href=""><h2 class="title is-5">Área médica</h2></a>
          <h3 class="subtitle is-7">Área restrira para profissionais</h3>
        </div>
      </div>
      <div class="hero-menu-item">
        <div class="hero-menu-img">
          <a href="">
            <img class="image" src="<?php // get_template_directory_uri(); ?>/assets/images/calendar-icon.png" alt="ilustração de desenho de calendário">
          </a>
        </div>
        <div class="hero-menu-content has-text-left">
          <a href=""><h2 class="title is-5">Pré-agendamento</h2></a>
          <h3 class="subtitle is-7">Consulta e exames</h3>
        </div>
      </div>
    </div> -->
    <div class="hero-content-header">
      <div class="has-text-centered">
        <div class="hero-content-item">
          <i class="fa fa-phone fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
        </div>
        <div class="hero-content-item">
          <i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
        </div>
        <div class="hero-content-item">
          <i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997677888">12 99767.7888</a>
        </div>
        <span class="pipe-separator is-hidden-mobile">|</span>
        <address>Av. Tivoli, 279 JD. Bethania São José dos Campos / SP</address>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); wp_footer(); ?>
</body>
</html>
