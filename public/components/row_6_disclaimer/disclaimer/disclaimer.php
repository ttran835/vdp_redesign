<div class="container">
  <div class="col-xs-12">
    <h3>
      <?php 
        if ($token['disclaimer']) {
          echo $token['disclaimer'];
        } else {
          echo 'Disclaimer';
        }
      ?>
    </h3>
    <p>
      <?php 
        echo getDisclaimer($vehicle, $disclaimers); 
      ?>
    </p>
  </div>
</div>