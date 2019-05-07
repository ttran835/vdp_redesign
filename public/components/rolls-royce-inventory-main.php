<?php
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
?>


<div class="container" id="name-and-price">
  <div class="row">
    <div class="col-xs-6">
      <h1 id="vehicle-name" class="vehicle-name">
        <?php echo $vehicle->label . $editButton; ?>
      </h1>

      <h6>
        <?php 
          if ($vehicle->status === 'in_transit') {
            echo 'In Transit';
          } else if ($vehicle->status === 'call_for_price') {
            echo 'Call for Price';
          } else {
            echo '';
          }
        ?>
      </h6>
    </div>
    <div class="col-xs-6">
      <div id="pricing-block">
        <?php 
          $pricing = $vehicle->pricing->display;
        
        ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <a id="vdp-back" class="pdtm-vdp-go-back">&larr; <!-- &larr to ingegrate arrow -->
        <?php 
          echo $tokens['go_back'];
        ?>
      </a>
    </div>
  </div>
</div>

<div id="vehicle-display" class="container">
  <div id="image-and-specs" class="row">
    <!-- Section to render carousel Images -->
    <?php require_once ('rolls_royce_vdp/components/row_1_img_and_specs/img_and_specs.php'); ?>
  </div>
  <div id="key-info-and-vid" class="row">
    <!-- Section to render key info and vid -->
    <?php require_once ('rolls_royce_vdp/components/row_2_key_info_and_vid/key_info_and_vid.php'); ?>
  </div>
    <!-- Section for similar vehicles -->
  <div id="rolls-royce-similar-vehicles" class="row hidden">
    <?php require_once ('rolls_royce_vdp/components/row_3_similar_vehicle/similar_vehicles/similar_vehicles.php') ?>
  </div>
    <!-- Section to view options -->
  <div id="standard-specifications" class="row">
    <?php require_once ('rolls_royce_vdp/components/row_4_standard_specs/standard_specs/standard_specs.php'); ?>
  </div>
    <!-- Section to view additional Features -->
  <div id="additional-features" class="row">
    <?php require_once ('rolls_royce_vdp/components/row_5_additional_features/additional_features/additional_features.php'); ?> 
  </div>
    <!-- Section to add in disclaimer information -->
  <div id="disclaimer" class="row">
    <?php  require_once ('rolls_royce_vdp/components/row_6_disclaimer/disclaimer/disclaimer.php'); ?> 
  </div>
</div>