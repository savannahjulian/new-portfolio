(function (window) {
  $(document).ready(function () {
    var slider = $('.project-images');
    slider.flexslider({
      animation: 'fade',
      controlNav: false,
      directionNav: false,
      keyboard: true
    });

    $('.carousel-next').on('click', function () {
      slider.flexslider('next');
    });

    $('.carousel-prev').on('click', function () {
      slider.flexslider('prev');
    });

    if ( $('.project-images .slides .image').length <= 1 ) $('.carousel-controls').hide()
  });
})(this);
