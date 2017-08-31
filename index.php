<?php get_header(); ?>

<div class="hero is-fullheight">
  <div class="hero-nav">
    <?php get_template_part('components/nav', 'nav') ?>
  </div>

  <section>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/IV_SITE_BANNER_HOME_1920X580P_V2.jpg" alt="banner ilustrativo" class="image">
    <!-- <div class="container">
      <div class="columns">
        <div class="column main-title has-text-centered">
          <h1 class="title is-3">
            <span>Uma clínica completa</span> para o tratamento dos seus olhos
          </h1>
        </div>
        <div class="column banner-menu">
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
        </div>
      </div>
    </div> -->
  </section>
  <div class="color-group">
    <div class="color-1"></div>
    <div class="color-2"></div>
    <div class="color-3"></div>
    <div class="color-4"></div>
  </div>
  <main class="hero-section">
    <div class="container">
      <div class="columns">

        <div class="column vertical-align has-text-centered-mobile is-5">
          <h1 class="title is-5">
            A principal clinica para atendimentos
            e procedimentos oftalmológicos
            na região do Vale do Paraíba.
          </h1>
          <a href="<?= get_permalink( get_page_by_path( 'historia' ) ); ?>" class="button is-info is-default">Clique e conheça mais</a>
        </div>

        <div class="column has-text-centered-mobile is-6">
          <h1 class="title is-bolder is-4 is-default">Convênios</h1>

          <div class="image-container slick-convenios">
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
