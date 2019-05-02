<div class="container">
  <div class="col-xs-12">
    <h3>
      <?php
        $tokens = 'Similar Vehicles';
        if($tokens) {
          echo $tokens;
        } else {
          echo 'Similar Vehicles';
        }
      ?>
    </h3>
  </div>  
  <div class="col-xs-12">
    <div class="pdtm-vdp-similar-vehicles" id="similar-vehicles-list"></div>
  </div>
</div>
