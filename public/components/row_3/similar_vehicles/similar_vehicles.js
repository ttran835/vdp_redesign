$(document).ready(function() {
  // updateSimilarVehicle is pulled directly from vdp.js
  // I append a new class called 'reference-overlay' to be parent
  // of everything that was written previously
  // similar how to Jon R have it set up, or John with the H
  // there is a token to check for whether or not it is rolls
  // please uncomment out line 21 and 45 when live

  // This is test vehicle object, please ignore this
  var testVehicles = [];
  $.getJSON('fake-data2.json', function(data) {
    data.forEach(function(items) {
      testVehicles.push(items);
      updateSimilarVehicles(testVehicles);
    });
  });

  // no need to change css. I nested it so the old css will
  // still be applicable. rolls-royce will be applied to rolls
  // please remove the argument once line 20 is uncommented
  var updateSimilarVehicles = function(vehicles) {
    // var vehicles = this.store.vehicle.similarVehicles;
    if (vehicles.length > 0) {
      var list = vehicles.map(function(item) {
        var $img = $('<img>')
          .addClass('similar-vehicle-image img-responsive')
          .attr({
            src: item.img,
            alt: item.label,
          });

        var $simVehicleImagery = $('<div>')
          .addClass('similar-vehicle-imagery')
          .append($img);

        var $simVehicleName = $('<div>')
          .addClass('similar-vehicle-name text-uppercase')
          .text(item.label + ' - ' + item.stockNum);

        // var $price = $('<strong>').html(PMUtilities.usCurrency(item.price));
        var $price = '$1234.50';

        var $simVehiclePrice = $('<div>')
          .addClass('similar-vehicle-price')
          .append($price);

        var $simVehicleInfo = $('<div>')
          .addClass('similar-vehicle-info')
          .append($simVehicleName, $simVehiclePrice);

        var $col = $('<div>')
          .addClass('col-sm-3 single-similar-vehicle')
          .append($simVehicleImagery, $simVehicleInfo);

        var $rollsRoyceAbtn = $('<a>')
          .attr('href', item.vdpHref)
          .text('View Vehicle')
          .click(function() {
            if ('VehicleSave' in window) {
              VehicleSave.save(item.vin, item, 'view');
            }
          });

        var $rollsRoyceAbtnOverlay = $('<div>')
          .addClass('reference-overlay')
          .append($rollsRoyceAbtn);

        var $rollsRoyceImgCon = $simVehicleImagery.append(
          $rollsRoyceAbtnOverlay
        );
        var $rollsRoyceSimilarVehicle = $col.append(
          $rollsRoyceImgCon,
          $simVehicleInfo
        );

        var $finalSimilarVehicleLayout = $('<a>')
          .addClass('similar-vehicle-link')
          .attr('href', item.vdpHref)
          .append($col)
          .click(function() {
            if ('VehicleSave' in window) {
              VehicleSave.save(item.vin, item, 'view');
            }
          });

        if ('pm_api' in window) {
          if (pm_api.site_token === 'nchonda') {
            $simVehicleName.removeClass('text-uppercase');
          }

          // this block of code should work once live
          // currently testing by just returing $rollsRoyceSimilarVehicle;
          if (pm_apit.site_token !== 'rolls-roycemotorcarsoc') {
            return $finalSimilarVehicleLayout;
          } else {
            return $rollsRoyceSimilarVehicle;
          }
        }

        // please remove this once we launch
        return $rollsRoyceSimilarVehicle;
      });

      $('#similar-vehicles-list').html(list);

      // please remove this once we launch as well
      $('#rolls-royce-similar-vehicles').removeClass('hidden');

      if ('pm_api' in window) {
        if (pm_api.site_token === 'rolls-roycemotorcarsoc') {
          $('#rolls-royce-similar-vehicles').removeClass('hidden');
        } else {
          $('#similar-vehicles').removeClass('hidden');
        }
      }
    }
  };
});
