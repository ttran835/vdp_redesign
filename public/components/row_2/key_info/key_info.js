$(document).ready(function() {
  console.log('initialized key_info?');

  // getting all elements
  var ctaBtn = $('.vdp-cta > a');
  var readMore = $('#read-more-btn');
  var readLess = $('#read-less-btn');
  var vehicleDetails = $('.vehicle-details');

  // to set timer
  var animateTime = 300;

  // function to show and hide dealer comments
  ctaBtn.on('click', function() {
    if (vehicleDetails.height() === 155) {
      animatedHeight(vehicleDetails, animateTime);
    } else {
      vehicleDetails.animate(
        {
          height: '155',
        },
        animateTime
      );
    }
  });

  // function to change text in a tag btn
  ctaBtn.on('click', function() {
    if (readMore.css('display').toLowerCase() === 'block') {
      readMore.animate(
        {
          display: 'none',
        },
        animateTime,
        function() {
          $(this).css('display', 'none');
        }
      );
      readLess.animate(
        {
          display: 'block',
        },
        animateTime,
        function() {
          $(this).css('display', 'block');
        }
      );
    } else {
      readLess.animate(
        {
          display: 'none',
        },
        animateTime,
        function() {
          $(this).css('display', 'none');
        }
      );
      readMore.animate(
        {
          display: 'block',
        },
        animateTime,
        function() {
          $(this).css('display', 'block');
        }
      );
    }
  });

  // function to handle height and overflow animation;
  var animatedHeight = function(el, timer) {
    var currentHeight = el.height();
    var showContent = el.css('height', 'auto').height();
    // resetting element to previous height if clicked again
    el.height(currentHeight);
    // to set to actual div height
    el.animate(
      {
        height: showContent,
      },
      timer
    );
  };
});
