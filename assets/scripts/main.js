(function(document, window, $) {

  $(function() {
    new Navigation($('.navigation'));
  });

  $(function() {
    var $slider = $('.slider');
    var $controlsPrev = $slider.find('.slider__control--previous');
    var $controlsNext = $slider.find('.slider__control--next');

    $slider.slick({
      adaptiveHeight: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      infinite: true,
      slide: '.slider__slide',
    });

    $controlsPrev.on('click.slider', function(e) {
      e.preventDefault();
      $slider.slick('slickPrev');
    });

    $controlsNext.on('click.slider', function(e) {
      e.preventDefault();
      $slider.slick('slickNext');
    });
  });

}(document, window, jQuery));
