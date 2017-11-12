<div class="hero hero-content-header">
  <div class="has-text-right">
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
      <?= do_action('createToggleActiveMenu'); ?>
    </div>
  </div>
</nav>