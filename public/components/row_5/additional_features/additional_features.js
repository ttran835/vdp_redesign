$(document).ready(function() {
  // This function is to get the specific height of the
  // first five li element and hide the rest
  //

  var additionalFeaturesCtaBtn = $('#additional-features .vdp-cta > a');
  var showMore = $('#additional-features #show-more-btn');
  var showLess = $('#additional-features #show-less-btn');
  var installedOptions = $('#installed-options');

  // to set timer
  var animateTime = 300;

  // function to show and hide dealer comments
  additionalFeaturesCtaBtn.on('click', function() {
    if (installedOptions.height() === 192) {
      animatedHeight(installedOptions, animateTime);
    } else {
      installedOptions.animate(
        {
          height: '192',
        },
        animateTime
      );
    }
  });

  // function to change text in a tag btn
  additionalFeaturesCtaBtn.on('click', function() {
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
  // function to take care of height animation;
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
