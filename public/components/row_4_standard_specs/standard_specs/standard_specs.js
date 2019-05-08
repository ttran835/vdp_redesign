$(document).ready(function() {
  // to handle accordion on md > render
  $('#spec-accordion').on('click', '.panel-title', function() {
    var icon = $(this).find('.fa');
    VDP.toggleIcon(icon);
  });

  $('#myTabs a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });
});
