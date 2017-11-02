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
  // $('.slick-item').slick({
  //   arrows: true,
  //   infinite: true,
  // 	adaptiveHeight: true,
  // 	// autoplay: true,
  // 	autoplaySpeed: 2000,
  // 	slidesPerRow: 2,
  // 	slidesToShow: 4,
  //   centerMode: true,
  //   getSlick: function (slicks) {
  //     console.log(slicks);
  //   }
  // });

  // $('.slick-convenios').slick({
  //   arrows: false,
  //   infinite: true,
  // 	adaptiveHeight: true,
  // 	autoplay: true,
  // 	autoplaySpeed: 2000,
  // 	slidesPerRow: 2,
  // 	slidesToShow: 5,
  //   variableWidth: true,
  //   getSlick: function (slicks) {
  //     console.log(slicks);
  //   }
  // });

  /**
   * Define a altura do background que passa por traz
   * das fotos dos médicos
   */
  // var windowHeight = $(window).height(),
  //     halfButton = $('.slick-arrow').height() / 2,
  //     distance = $('.slick-arrow').offset().top;
  // $('.slick-background').css('height', (windowHeight - distance) - halfButton);
});
