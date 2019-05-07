$(document).ready(function() {
  console.log('initialized key_info?');

  // getting all elements
  var keyInfoCtaBtn = $('#key-info-and-vid .vdp-cta > a');
  var showMore = $('#key-info-and-vid #show-more-btn');
  var showLess = $('#key-info-and-vid #show-less-btn');
  var vehicleDetails = $('.vehicle-details');

  // to set timer
  var animateTime = 300;

  // function to show and hide dealer comments
  keyInfoCtaBtn.on('click', function() {
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
  keyInfoCtaBtn.on('click', function() {
    if (showMore.css('display').toLowerCase() === 'block') {
      showMore.animate(
        {
          display: 'none',
        },
        animateTime,
        function() {
          $(this).css('display', 'none');
        }
      );
      showLess.animate(
        {
          display: 'block',
        },
        animateTime,
        function() {
          $(this).css('display', 'block');
        }
      );
    } else {
      showLess.animate(
        {
          display: 'none',
        },
        animateTime,
        function() {
          $(this).css('display', 'none');
        }
      );
      showMore.animate(
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
