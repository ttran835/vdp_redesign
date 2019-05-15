'use strict';

$(document).ready(function() {
  // First arguement is for the parent vid
  // Second argument is for the name of btn
  // that will be used to render the height
  // and changing the name of the btn
  // Arguments should be passed as strings
  // This function is only to be used with VDP and not anywhere else
  var dynamicBtn = function dynamicBtn(
    $divId,
    $showMoreBtn,
    $showLessBtn,
    $sectionToShow,
    $animateTime
  ) {
    var $anchorBtnForSection = $(''.concat($divId, ' .vdp-cta > a'));
    var $showMore = $(''.concat($divId, ' ').concat($showMoreBtn));
    var $showLess = $(''.concat($divId, ' ').concat($showLessBtn));
    var $sectionToShowAndHide = $(''.concat($sectionToShow));

    var $hiddenDivHeight;

    if ($sectionToShowAndHide.height() > 195) {
      $hiddenDivHeight = 195;
      $sectionToShowAndHide.css('height', $hiddenDivHeight);
    } else {
      $hiddenDivHeight = $sectionToShowAndHide.height();
      $sectionToShowAndHide.css('height', $hiddenDivHeight);
    }

    $anchorBtnForSection.on('click', function() {
      if ($sectionToShowAndHide.height() === $hiddenDivHeight) {
        animatedHeight($sectionToShowAndHide, $animateTime);
      } else {
        $sectionToShowAndHide.animate(
          {
            height: $hiddenDivHeight,
          },
          $animateTime
        );
      }
    });

    $anchorBtnForSection.on('click', function() {
      if ($showMore.css('display').toLowerCase() === 'block') {
        $showMore.animate(
          {
            display: 'none',
          },
          $animateTime,
          function() {
            $(this).css('display', 'none');
          }
        );
        $showLess.animate(
          {
            display: 'block',
          },
          $animateTime,
          function() {
            $(this).css('display', 'block');
          }
        );
      } else {
        $showLess.animate(
          {
            display: 'none',
          },
          $animateTime,
          function() {
            $(this).css('display', 'none');
          }
        );
        $showMore.animate(
          {
            display: 'block',
          },
          $animateTime,
          function() {
            $(this).css('display', 'block');
          }
        );
      }
    });

    if ($hiddenDivHeight < 195) {
      $showMore.css('display', 'none');
    } else {
      $showLess.css('display', 'block');
    }

    var animatedHeight = function animatedHeight($el, $timer) {
      var currentHeight = $el.height();
      var showContent = $el.css('height', 'auto').height();
      $el.height(currentHeight);

      $el.animate(
        {
          height: showContent,
        },
        $timer
      );
    };
  };

  dynamicBtn(
    '#key-info-and-vid',
    '.show-more-btn',
    '.show-less-btn',
    '.vehicle-details',
    500
  );
});
