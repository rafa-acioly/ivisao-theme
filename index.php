<?php get_header(); ?>

<div class="hero is-fullheight">
  <div class="hero-nav">
    <?php get_template_part('components/nav', 'nav') ?>
  </div>

  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-8-desktop">
          <h1 class="title is-2">
            <span>Uma clínica completa</span> <br>
            para o tratamento <br>
            dos seus olhos
          </h1>
        </div>
        <div class="column">
          <div class="columns">
            <div class="column has-text-centered">
              <figure>
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/medico.png" alt="area medicos">
                </a>
                <figcaption>
                  <h1 class="title is-4">Médicos</h1>
                  <h2 class="subtitle">Área restrira para profissionais</h2>
                </figcaption>
              </figure>
            </div>
            <div class="column has-text-centered">
              <figure>
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/agenda.png" alt="agendamento consulta">
                </a>
                <figcaption>
                  <h1 class="title is-4">Pré-agendamento</h1>
                  <h2 class="subtitle">Consultas e exames</h2>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-section">
    <div class="container">
      <div class="columns">
        <div class="column vertical-align">
          <h1 class="title is-4">
            A principal clinica para atendimentos <br>
            e procedimentos oftalmológicos <br>
            na região do Vale do Paraíba.
          </h1>
          <a href="" class="button is-info">Clique e conheça mais</a>
        </div>
        <div class="column has-text-right vertical-align">
          <h1 class="title">Conviênios</h1>
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
  </div>
  <footer class="hero-foot has-text-centered">
    Avenida Tivoli, 279, Jd.Bethania - São José dos Campos
  </footer>
</div>

<?php get_footer(); ?>
