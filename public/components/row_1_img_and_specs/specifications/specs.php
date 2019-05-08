<div id="specification-content">
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
              echo '<td>'.$stat->label.'</td>';
              echo '<td>'.$stat->value.'</td>';
            }
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
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
      <div class="col-xs-12" id="cta-button-column">
        <div id="cta-buttons-right" class="pdtm-vdp-cta-right">
          <?php
            foreach ($vehicle->cta_right as $button) {
              echo '<' . $button->element . ' ';
              foreach ($button->attributes as $key => $value) {
                echo $key . '="' . $value . '" ';
              }
              echo '>';
              if (!empty($button->icon)) {
            ?>
              <i class="fa <?php echo $button->icon; ?>"></i>
            <?php
              }
              echo $button->label;
              echo '</' . $button->element . '>';
              }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>