$(document).ready(function () {

  /**
   * Adiciona a interação com menu hamburguer em dispositivos mobile
   */
  $('.nav-toggle').on('click', function () {
    $(this).toggleClass("is-active");
    $('.nav-right').toggleClass('is-active');
  });

  /**
   * Adiciona o efeito de abrir e fechar o menu mobile
   */
  $('.navbar button.navbar-burger').on('click', function () {
    $('.navbar .navbar-menu').toggleClass('is-active');
  });

  /**
   * Configura o slide para exibição de fotos dos médicos
   */
  $('.slick-item').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});
