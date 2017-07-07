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
        <!-- <div class="column banner-menu">
          <div class="columns">
            <div class="column has-text-centered">
              <figure>
                <a href="#">
                  <img src="/assets/images/medico.png" alt="area medicos">
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
                  <img src="/assets/images/agenda.png" alt="agendamento consulta">
                  <figcaption>
                    <h1 class="title is-4">Pré-agendamento</h1>
                    <h2 class="subtitle">Consultas e exames</h2>
                  </figcaption>
                </a>
              </figure>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <main class="hero-section">
    <div class="container">
      <div class="columns">

        <div class="column vertical-align has-text-centered-mobile is-4">
          <h1 class="title is-4">
            A principal clinica para atendimentos <br>
            e procedimentos oftalmológicos <br>
            na região do Vale do Paraíba.
          </h1>
          <a href="<?= get_permalink( get_page_by_path( 'historia' ) ); ?>" class="button is-info">Clique e conheça mais</a>
        </div>

        <div class="column has-text-centered-mobile">
          <h1 class="title is-bolder">Convênios</h1>

          <div class="image-container">
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-01.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-02.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-03.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-04.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-05.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-06.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-07.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-08.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-09.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-10.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-11.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-12.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-13.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-14.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-15.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-16.jpg" alt=""></figure>
            <figure><img src="<?= get_template_directory_uri(); ?>/assets/images/convenios/IDV_LOGOS_CONVENIO_90X90P-17.jpg" alt=""></figure>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php get_template_part('components/hero', 'footer'); ?>
</div>
</body>
</html>
