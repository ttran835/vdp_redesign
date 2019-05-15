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
    $animateTime,
    $isList
  ) {
    var $anchorBtnForSection = $(''.concat($divId, ' .vdp-cta > a'));
    var $showMore = $(''.concat($divId, ' ').concat($showMoreBtn));
    var $showLess = $(''.concat($divId, ' ').concat($showLessBtn));
    var $sectionToShowAndHide = $(''.concat($sectionToShow));

    if ($isList) {
      var $setHeight = setDynamicDivHeight($divId, 0, $isList);
      $sectionToShowAndHide.css('height', $setHeight);
    } else {
      var $setHeight = setDynamicDivHeight($sectionToShowAndHide, 195);
    }

    $anchorBtnForSection.on('click', function() {
      if ($sectionToShowAndHide.height() === $setHeight) {
        animatedHeight($sectionToShowAndHide, $animateTime);
      } else {
        $sectionToShowAndHide.animate(
          {
            height: $setHeight,
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

    if ($setHeight > $sectionToShowAndHide.height()) {
      $showMore.css('display', 'none');
      $showLess.css('display', 'none');
    } else {
      $showMore.css('display', 'block');
      $showLess.css('display', 'none');
    }
  };

  var setDynamicDivHeight = function setDynamicDivHeight(
    $div,
    $desiredHeightToShow,
    $hasList
  ) {
    var $hiddenDivHeight;
    var $isList = false;

    if ($hasList) {
      $isList = $hasList;
    }

    if ($isList) {
      var $sumChildrenHeight = 0;
      $(`${$div} ul li:lt(3)`).each(function() {
        $sumChildrenHeight += $(this).height();
      });
      $hiddenDivHeight = $sumChildrenHeight;
    } else {
      if ($div.height() > $desiredHeightToShow) {
        $hiddenDivHeight = $desiredHeightToShow;
        $div.css('height', $hiddenDivHeight);
      } else {
        $hiddenDivHeight = $div.height();
        $div.css('height', $hiddenDivHeight);
      }
    }

    return $hiddenDivHeight;
  };

  var animatedHeight = function animatedHeight($el, $timer) {
    var $currentHeight = $el.height();
    var $showContent = $el.css('height', 'auto').height();
    $el.height($currentHeight);
    $el.animate(
      {
        height: $showContent,
      },
      $timer
    );
  };

  dynamicBtn(
    '#key-info-and-vid',
    '.show-more-btn',
    '.show-less-btn',
    '.vehicle-details',
    500,
    false
  );
});
