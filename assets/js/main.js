$(document).ready(function () {

  console.log('ready');

  $('.nav-toggle').on('click', function () {
    $(this).toggleClass("is-active");
    $('.nav-right').toggleClass('is-active');
  });

  $('.slick-item').slick({
    infinite: true,
  	adaptiveHeight: true,
  	autoplay: true,
  	autoplaySpeed: 2000,
  	slidesPerRow: 2,
  	slidesToShow: 4,
  });
});
