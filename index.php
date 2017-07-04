<?php get_header(); ?>

<div class="hero is-fullheight">
  <div class="hero-nav">
    <?php get_template_part('components/nav', 'nav') ?>
  </div>

  <section class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-8-desktop main-title">
          <h1 class="title is-1">
            <span>Uma clínica completa</span> <br>
            para o tratamento <br>
            dos seus olhos
          </h1>
        </div>
        <div class="column banner-menu">
          <div class="columns">
            <div class="column has-text-centered">
              <figure>
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/medico.png" alt="area medicos">
                  <figcaption>
                    <h1 class="title is-4">Médicos</h1>
                    <h2 class="subtitle">Área restrira para profissionais</h2>
                  </figcaption>
                </a>
              </figure>
            </div>
            <div class="column has-text-centered">
              <figure>
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/agenda.png" alt="agendamento consulta">
                  <figcaption>
                    <h1 class="title is-4">Pré-agendamento</h1>
                    <h2 class="subtitle">Consultas e exames</h2>
                  </figcaption>
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main class="hero-section">
    <div class="container">
      <div class="columns">
        <div class="column vertical-align has-text-centered-mobile">
          <h1 class="title is-4">
            A principal clinica para atendimentos <br>
            e procedimentos oftalmológicos <br>
            na região do Vale do Paraíba.
          </h1>
          <a href="" class="button is-info">Clique e conheça mais</a>
        </div>
        <div class="column has-text-right has-text-centered-mobile vertical-align">
          <h1 class="title is-bolder">Conviênios</h1>
        </div>
        <div class="column">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
          <img src="http://placehold.it/90x90" alt="" class="is-round">
        </div>
      </div>
    </div>
  </main>
  <?php get_template_part('components/hero', 'footer'); ?>
</div>
</body>
</html>
