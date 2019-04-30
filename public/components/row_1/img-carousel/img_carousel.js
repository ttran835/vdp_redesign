var imgCarousel = function() {
  $('#detail-images').slick({
    asNavFor: '#thumbnail-gallery',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
  });

  var slidesToShow = 10;
  var slidesAvailable = $('#thumbnail-gallery').children().length - 1;
  if (slidesAvailable && slidesToShow > slidesAvailable) {
    slidesToShow = slidesAvailable;
  }

  $('#thumbnail-gallery').slick({
    asNavFor: '#detail-images',
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    lazyLoad: 'ondemand',
    focusOnSelect: true,
    speed: 300,
    slidesToShow: slidesToShow,
    slidesToScroll: 1,
    adaptiveHeight: true,
  });
};

// module.exports = { imgCarousel };
