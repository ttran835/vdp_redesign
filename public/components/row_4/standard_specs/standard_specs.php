<div class="container">
  <div class="col-xs-12">
    <h3>
      <?php
        $tokens = 'standard_specifications';
        if($tokens) {
          echo $tokens;
        } else {
          echo 'standard_specifications';
        }
      ?>
    </h3>
    <div class="panel-group" id="spec-accordion">
      <div class="panel pdtm-vdp-specs">
        <h4 class="panel-title"
            data-toggle="collapse"
            data-parent="#spec-accordion"
            data-target="#test">
            Option Names 1
            <i class="fa fa-caret-right"></i>
        </h4>
        <div class="panel-collapse collapse" id="test">
          <table>
            <tbody>
              <?php 
              $testArray = array(
                'Spec', 'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec', 'Spec', 'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' ,  'Spec' 
              );

              $cols = [];
              $perCol = 12;
            
              foreach ($testArray as $index => $spec) {
                echo '<tr>';
                echo '<td>'.$optionLength.'</td>';
                echo '</tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel pdtm-vdp-specs">
        <h4 class="panel-title"
            data-toggle="collapse"
            data-parent="#spec-accordion"
            data-target="#test2">
            Option Names 2
            <i class="fa fa-caret-right"></i>
        </h4>
        <div class="panel-collapse collapse" id="test2">
          <ul>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <br />
          </ul>
        </div>
      </div>
      <div class="panel pdtm-vdp-specs">
        <h4 class="panel-title"
            data-toggle="collapse"
            data-parent="#spec-accordion"
            data-target="#test3">
            Option Names 3
            <i class="fa fa-caret-right"></i>
        </h4>
        <div class="panel-collapse collapse" id="test3">
          <ul>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
            <li>
              Test Item and Specs
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>