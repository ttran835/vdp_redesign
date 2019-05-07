$(document).ready(function() {
  console.log('initialized img_carousel?');
  var slidesToShow = 5;
  var slidesAvailable = $('.product-gallery-nav').children().length - 1;
  if (slidesAvailable && slidesToShow > slidesAvailable) {
    slidesToShow = slidesAvailable;
  }

  $('#product-gallery-detail').slick({
    lazyLoad: 'ondemand',
    fade: true,
    speed: 500,
    autoplay: true,
    infinite: true,
    asNavFor: '.product-gallery-nav',
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: false,
          dots: false,
        },
      },
    ],
  });

  $('.product-gallery-nav').slick({
    slidesToShow: slidesToShow,
    slidesToScroll: 1,
    asNavFor: '#product-gallery-detail',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: false,
          dots: true,
        },
      },
    ],
  });
});

// module.exports = { imgCarousel };
