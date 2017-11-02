<?php get_header(); ?>

<div class="hero hero-content-header">
  <div class="has-text-right">
    <i class="fa fa-phone fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
    <i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
    <i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997677888">12 99767.7888</a>
    <span class="pipe-separator is-hidden-mobile">|</span>
    <address class="is-hidden-mobile">Av. Tivoli, 279 JD. Bethania São José dos Campos</address>
  </div>
</div>
<div class="color-group">
  <div class="color-1"></div>
  <div class="color-2"></div>
  <div class="color-3"></div>
  <div class="color-4"></div>
</div>

<nav class="navbar" role="navigation" aria-label="navegação principal">
  <div class="navbar-brand">
    <a href="/" class="navbar-item">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/iv_logo_horizontal.png" alt="logotipo">
    </a>

    <button class="button navbar-burger is-white">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div class="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item">
        <a href="">Quem somos</a>
      </div>
      <div class="navbar-item">
        <a href="">Exames</a>
      </div>
      <div class="navbar-item">
        <a href="">Cirurgias</a>
      </div>
      <div class="navbar-item">
        <a href="">Corpo clinico</a>
      </div>
      <div class="navbar-item">
        <a href="">Convênios</a>
      </div>
      <div class="navbar-item">
        <a href="">Área médica</a>
      </div>
      <div class="navbar-item">
        <a href="">Pré-agendamento</a>
      </div>
      <div class="navbar-item">
        <a href="">Contato</a>
      </div>
    </div>
  </div>
</nav>

<main class="hero hero-content-body">
  <div class="hero-side-menu">
    <div class="hero-menu-item">
      <div class="hero-menu-img">
        <a href=""><img src="http://placehold.it/100x100" alt=""></a>
      </div>
      <div class="hero-menu-content has-text-centered">
        <a href=""><h2 class="title is-5">Área médica</h2></a>
        <h3 class="subtitle is-7">Área restrira para profissionais</h3>
      </div>
    </div>
    <div class="hero-menu-item">
      <div class="hero-menu-img">
        <a href="">
          <img src="http://placehold.it/100x100" alt="">
        </a>
      </div>
      <div class="hero-menu-content has-text-centered">
        <a href=""><h2 class="title is-5">Pré-agendamento</h2></a>
        <h3 class="subtitle is-7">Consulta e exames</h3>
      </div>
    </div>
  </div>
  <?= do_shortcode("[metaslider id=41]"); ?>
</main>
<?php get_footer(); wp_footer(); ?>
</body>
</html>
