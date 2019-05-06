<?php
/*
  $vehicle = $store->vehicle;
  $disclaimers = $store->disclaimers;

  function getDisclaimer($vehicle, $disclaimers)
  {
    if (isset($vehicle->certified) && $vehicle->certified) {
      return $disclaimers->certified;
    } else if ($vehicle->condition == 'used') {
      return $disclaimers->used;
    } else {
      return $disclaimers->new;
    }
  }

  $language = PM_SITE_PROPS['language'];
  $file = PM_MOTORS_MODULE_PATH . 'translation/lang/lang_' . $language . '.php';
  if (file_exists($file)) {
    $lang_tokens = include_once $file;
  } else {
    $lang_tokens = include_once PM_MOTORS_MODULE_PATH . 'translation/lang/lang_en.php';
  }
  $tokens = $lang_tokens['vdp'];

  $editButton = '';
  $showOptionCodeStatus = false;

  if (current_user_can('edit_others_pages')) {
    $editButton = "<a href='/wp-admin/admin.php?page=inventory-admin&vin=" . $vehicle->vin . "' target='_blank' class='pull-right' style='font-size: 25px; color: inherit;'><i class='fa fa-pencil-square-o'></i></a>";
    if (PM_MOTORS_OEM === 'FCA') {
      $showOptionCodeStatus = true;
    }
  }

  $moto = in_array(PM_MOTORS_SITE_TOKEN, ['bmwmcriverside']);
  */
?>

<!-- <h1 id="vehicle-name" class="vehicle-name<?php /* echo 
  PM_MOTORS_SITE_TOKEN !== 'nchonda' ? ' text-uppercase' : ''; ?>"><?php echo $vehicle->label . $editButton; */?></h1> -->

<div class="col-xs-12" id="name-and-price">
  <h1>Where Vehicle Title will be</h1>
  <h1>
    <?php 
      if ('$vehicle->status' === 'in_transit') {
        echo 'In Transit';
      } else if ('$vehicle->status' === 'call_for_price') {
        echo 'Call for Price';
      } else {
        echo 'Temporary Car Title';
      }
    ?>
  </h1>
</div>

<div id="vehicle-display">
  <div id="image-and-specs" class="row">
    <!-- Section to render carousel Images -->
    <?php require_once ('./components/row_1/img_and_specs.php'); ?>
  </div>
  <div id="key-info-and-vid" class="row">
    <!-- Section to render key info and vid -->
    <?php require_once ('./components/row_2/key_info_and_vid.php'); ?>
  </div>
    <!-- Section for similar vehicles -->
  <div id="rolls-royce-similar-vehicles" class="row hidden">
    <?php require_once ('./components/row_3/similar_vehicles/similar_vehicles.php') ?>
  </div>
    <!-- Section to view options -->
  <div id="standard-specifications" class="row">
    <?php require_once ('./components/row_4/standard_specs/standard_specs.php'); ?>
  </div>
    <!-- Section to view additional Features -->
  <div id="additional-features" class="row">
    <?php require_once ('./components/row_5/additional_features/additional_features.php'); ?> 
  </div>
    <!-- Section to add in disclaimer information -->
  <div id="disclaimer" class="row">
    <?php  require_once ('./components/row_6/disclaimer/disclaimer.php'); ?> 
  </div>
</div>