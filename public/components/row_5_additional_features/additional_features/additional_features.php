<div class="container">
  <div class="col-xs-12">
    <h3>
      <?php
        if($tokens['installed_options']) {
          echo $tokens['installed_options'];
        } else {
          echo 'Installed Options';
        }
      ?>
    </h3>
    <div id="installed-options">
      <ul>
        <?php 
          foreach ($vehicle->installedOptions as $standardOtions) {
            echo '<li>'.$standardOtions.'</li>';
          }
        ?>
      </ul>
    </div>
    <div class='vdp-cta'>
      <a id='show-more-btn'>Show More</a>
      <a id='show-less-btn'>Show Less</a>
    </div>
  </div>
</div>