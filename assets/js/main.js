$(document).ready(function () {

  $('.nav-toggle').on('click', function () {
    $(this).toggleClass("is-active");
    $('.nav-right').toggleClass('is-active');
  });

  $('[data-scroll]').on('click', function () {

    // TODO: realizar o scroll para a seção referente ao link clicado

  });

  $('.main-hero .scroll-down').on('click', function () {

    // TODO: Realizar o scroll da pagina ate o navbar

  });
});
