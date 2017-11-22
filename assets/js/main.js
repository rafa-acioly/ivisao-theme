$(document).ready(function () {

  /**
   * Adiciona o efeito de abrir e fechar o menu mobile
   */
  $('.navbar button.navbar-burger').on('click', function () {
    $(this).toggleClass('is-active');
    $('.navbar .navbar-menu').toggleClass('is-active');
  });

  /**
   * Configura o slide para exibição de fotos dos médicos
   */
  $('.slick-item').slick({
    centerMode: true,
    centerPadding: '50px',
    autoplay: true,
    autoplayspeed: 3000,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });
});
