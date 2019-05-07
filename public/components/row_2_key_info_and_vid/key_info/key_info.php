<div id="key-info">
  <div class='col-xs-12'>
    <h3>Key Information</h3>
    <!-- <div class='bullet-points'>
      This could be used for the dealers to make additional comments if needed. 
      <ul>
        <li>This section is basically where the dealer's comment will go</li>
        <li>I have separated this into two sections</li>
        <li>This section will include the bullet points</li>
        <li>You probably will have to get the comment and pass their values through</li>
      </ul>
    </div> -->
    <div class='vehicle-details'>
      <?php
        $comments = 0; 
        if (strlen($vehicle->dealerComments) > 0) {
          $comments = $vehicle->dealerComments;
        } elseif (strlen($vehicle->advertisement) > 0) {
          $comments = $vehicle->advertisement;
        }

        if ($comments) {
          echo '<p>'.$comments.'</p>';
        } else {
          echo '<p>Please in touch with our Dealer to receive more information about this specific vehicle.</p>';
        }
      ?>
    </div>
    <div class='vdp-cta'>
      <a id='show-more-btn'>Read More</a>
      <a id='show-less-btn'>Read Less</a>
    </div>
  </div>
</div>