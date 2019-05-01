<div id="specification-content">
  <div class='col-xs-12 col-sm-6 col-md-12'>
    <table>
      <tbody>
        <tr>
          <th>Specification</th>
        </tr>
        <?php 
        $testArray = array(
          'Spec', 'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' 
        );

        $testArray2 = array(
          'Info'
        );

        foreach ($testArray as $spec) {
          echo '<tr>';
          echo '<td>'.$spec.':'.'</td>';
          foreach ($testArray2 as $info) {
            echo '<td>'.$info.'</td>';
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
      <div class="col-xs-12 pdtm-vdp-cta-right" id="dynamic-cta">
        <?php
        /* comment out for now, but should work with api
        I will have to go back and redo the css for this
        Once it is hooked back up to the api after finish
        implementing everything else. */
        /*
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
        */
        ?>
      </div>
    </div>
  </div>
</div>