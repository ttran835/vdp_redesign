$('.filter-btn').click(function() {
  var filterValue = $(this).attr('data-filter');

  $('.filter-btn').removeClass('filter-btn-active');
  $(this).addClass('filter-btn-active');

  if (filterValue != 'all') {
    $('.product-showroom-item').hide();
  } else {
    $('.product-showroom-item').show();
  }

  $("[data-category='" + filterValue + "']").show();
});

$(document).ready(function() {
  $('[data-filter=all]').addClass('filter-btn-active');
});

$('.filter-btn').click(function() {
  var filterValue = $(this).attr('data-filter');

  $('.filter-btn').removeClass('filter-btn-active');
  $(this).addClass('filter-btn-active');

  if (filterValue != 'all') {
    $('.product-showroom-item').animate(
      {
        opacity: 0,
      },
      200,
      function() {
        $('.product-showroom-item').hide();
        $("[data-category='" + filterValue + "']").show();
      }
    );
  } else {
    $('.product-showroom-item').animate(
      {
        opacity: 0,
      },
      200,
      function() {
        $('.product-showroom-item').show();
        $('.product-showroom-item').animate(
          {
            opacity: 1,
          },
          200,
          function() {
            // animation
          }
        );
      }
    );
  }

  $("[data-category='" + filterValue + "']").animate(
    {
      opacity: 1,
    },
    200,
    function() {
      //animation complete
    }
  );
});

$(document).ready(function() {
  $('.product-gallery-detail').slick({
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
    asNavFor: '.product-gallery-detail',
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

$(document).ready(function() {
  $('.specs-tab')
    .first()
    .addClass('specs-tab-active');
  $('.specs-panel-group-list').hide();
  $('.specs-panel-group-list')
    .first()
    .show();
  $('.specs-panel')
    .first()
    .attr('data-panel-status', 'active');
});

$('.specs-tab').click(function() {
  var tabFilterValue = $(this).attr('data-tab-filter');

  $('.specs-tab').removeClass('specs-tab-active');
  $(this).addClass('specs-tab-active');
  $('.specs-panel').hide();
  $('.specs-panel').attr('data-panel-status', '');
  $("[data-panel-category='" + tabFilterValue + "']").show();
  $("[data-panel-category='" + tabFilterValue + "']").attr(
    'data-panel-status',
    'active'
  );
});

$('.specs-panel-group').click(function() {
  $('.specs-panel-group-list').hide();
  $(this)
    .find('.specs-panel-group-list')
    .show();
});

// module.exports = { imgCarousel };
