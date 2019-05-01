$(document).ready(function() {
  console.log('initialized?');
  $('#product-gallery-detail').slick({
    lazyLoad: 'ondemand',
    autoplay: true,
    infinite: true,
    asNavFor: '.product-gallery-nav',
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
    slidesToShow: 4,
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
