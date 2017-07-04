<nav class="nav">
  <div class="container">
    <div class="nav-left">
      <div class="nav-item">
        <a href="<?= get_home_url(); ?>">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/iv_logo_horizontal.png" alt="">
        </a>
      </div>
    </div>

    <div class="nav-right nav-menu">
      <?php if (!is_single()): ?>
        <div class="nav-menu-contact is-hidden-mobile">
          <div class="nav-item">
            <span class="icon"><i class="fa fa-phone fa-fw"></i></span>
            <a href="tel:+551238467888">12 3846.7888</a>
          </div>
          <div class="nav-item">
            <span class="icon"><i class="fa fa-whatsapp fa-fw"></i></span>
            <a href="tel:+5512997507888">12 99750.7888</a>
          </div>
          <div class="nav-item">
            <span class="icon"><i class="fa fa-whatsapp fa-fw"></i></span>
            <a href="tel:+5512997677888">12 99767.7888</a>
          </div>
          <div class="nav-item">
            <span class="icon"><i class="fa fa-envelope fa-fw"></i></span>
            <a href="mailto:contato@ivisaosjc.com.br">contato@ivisaosjc.com.br</a>
          </div>
        </div>
      <?php endif; ?>
      <div class="nav-menu-itens">
        <?= do_action('createToggleActiveMenu'); ?>
        <!-- <a href="" class="nav-item is-tab">Pagina Inicial</a>
        <a class="nav-item is-tab">Empresas</a>
        <a class="nav-item is-tab">Exames</a>
        <a class="nav-item is-tab">Cirurgias</a>
        <a class="nav-item is-tab">Para Médicos</a>
        <a class="nav-item is-tab">Corpo Clínico</a>
        <a class="nav-item is-tab">Contato</a>
        <a class="nav-item is-tab">Pré-agendamento</a> -->
      </div>
    </div>

    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </div>
</nav>
