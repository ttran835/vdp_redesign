<div id="specification-content">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-12">
      <table>
        <tbody>
          <tr>
            <th>Specification</th>
          </tr>
          <?php
            foreach ($vehicle->stats as $stat) {
              echo '<tr>';
              foreach ($stat->attributes as $key => $value) {
                echo '<td>'.$stat->label.':'.'</td>';
                echo '<td>'.$stat->value.'</td>';
              }
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-12">
      <div class="row vdp-cta">
        <div class="col-xs-12">
          <a href='/contact/'>
          <i class="fa fa-envelope"></i>
            ENQUIRE NOW VIA EMAIL
          </a>
          <p>
            or call us at "dealer-phone-number"
          </p>
        </div>
        <div id ="cta-buttons-right" class="row">
          <div class="col-xs-12 pdtm-vdp-cta-right">
            <?php
              foreach ($vehicle -> $cta_right as $button) {
                echo '<'.$button -> element. ' ';
                foreach ($button -> attributes as $key => $value) {
                  echo $key. '="' .$value. '" '; 
                }
                echo '>';
                if (!empty($button -> icon)) {
                  '<i class="fa' .$button -> icon. '"></i>';
                }
                echo $button -> label;
                echo '</' .$button -> element. '>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>