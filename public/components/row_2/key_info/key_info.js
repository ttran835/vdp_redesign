$(document).ready(function() {
  console.log('initialized key_info?');

  var ctaBtn = $('.vdp-cta > a');
  var readMore = $('#read-more-btn');
  var readLess = $('#read-less-btn');
  var vehicleDetails = $('.vehicle-details');

  ctaBtn.on('click', function() {
    if (readMore.css('display').toLowerCase() === 'block') {
      readMore.animate(
        {
          display: 'none',
        },
        500,
        function() {
          $(this).css('display', 'none');
        }
      );
      readLess.animate(
        {
          display: 'block',
        },
        500,
        function() {
          $(this).css('display', 'block');
        }
      );
      vehicleDetails.animate(
        {
          maxHeight: '155px',
        },
        1000,
        function() {
          $(this).css('max-height', 'fit-content');
        }
      );
    }
  });
  readMore.on('click', function() {
    vehicleDetails.animate('max-height', 'fit-content');
  });

  readLess.on('click', function() {
    readLess.animate('display', 'none');
    readMore.animate('display', 'block');
    vehicleDetails.animate('max-height', '155px');
  });
});
