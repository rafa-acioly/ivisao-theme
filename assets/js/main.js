$(document).ready(function () {

  $('.nav-toggle').on('click', function () {
    $(this).toggleClass("is-active");
    $('.nav-right').toggleClass('is-active');
  });

  $('.slick-item').slick({
    arrows: true,
    infinite: true,
  	adaptiveHeight: true,
  	// autoplay: true,
  	autoplaySpeed: 2000,
  	slidesPerRow: 2,
  	slidesToShow: 4,
    centerMode: true,
    getSlick: function (slicks) {
      console.log(slicks);
    }
  });

  var element = $('.slick-slider');
      offset = element.offset().top,
      inner = element.height() / 2;
  $('.slick-background').css('height', offset)
});
