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
<div class="row" id="name-and-price">
  <h1>Where Vehicle Title will be</h1>
  <h1>
    <?php 
      if ('in_transit' === 'in_transit') {
    ?>
        In Transit
    <?php
      }
    ?>
  </h1>
</div>
<div id="vehicle-display">
  <div id="image-and-specs" class="row">
    <!-- Section to render carousel Images -->
    <?php require './components/row_1/img_and_specs.php'?>
  </div>
</div>
