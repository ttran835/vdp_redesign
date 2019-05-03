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
   
    <div id="standard-specification-nav-tabs">
    <!-- Nav tabs -->
      <ul id="" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mechanical</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Exterior</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Entertainment</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Interior</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Safety</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <ul class="tab-spec-info-list">
            <li>
              Engine: Twin Turbo 6.6L V12 DOHC -inc: variable valve control and direct fuel injection
            </li>
            <li>
              Transmission: 8-Speed Automatic
            </li>
            <li>
              Transmission w/Driver Selectable Mode
            </li>
            <li>
            Rear-Wheel Drive
            </li>
            <li>
            2.81 Axle Ratio
            </li>
            <li>
            Engine Oil Cooler
            </li>
            <li>
            90-Amp/Hr Maintenance-Free Battery w/Run Down Protection
            </li>
            <li>
            210 Amp Alternator
            </li>
            <li>
            4-Corner Auto-Leveling Suspension
            </li>
            <li>
            Front And Rear Anti-Roll Bars
            </li>
            <li>
              Automatic w/Driver Control Height Adjustable Automatic Ride Control Comfort Ride Adaptive 
            </li>
            <li>
            Suspension
            </li>
            <li>
            Hydraulic Power-Assist Speed-Sensing Steering
            </li>
            <li>
            21.8 Gal. Fuel Tank
            </li>
            <li>
            Dual Stainless Steel Exhaust
            </li>
            <li>
            4-Wheel Disc Brakes w/4-Wheel ABS, Front And Rear Vented Discs, Brake Assist, Hill Hold Contro
            </li>
            
            <br />
          </ul>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile"><ul class="spec-info-list">
            <li>
              Engine: Twin Turbo 6.6L V12 DOHC -inc: variable valve control and direct fuel injection
            </li>
            <li>
              Transmission: 8-Speed Automatic
            </li>
            <li>
              Transmission w/Driver Selectable Mode
            </li>
            <li>
            Rear-Wheel Drive
            </li>
            <li>
            2.81 Axle Ratio
            </li>
            <li>
            Engine Oil Cooler
            </li>
            <li>
            90-Amp/Hr Maintenance-Free Battery w/Run Down Protection
            </li>
            <li>
            210 Amp Alternator
            </li>
            <li>
            4-Corner Auto-Leveling Suspension
            </li>
            <li>
            Front And Rear Anti-Roll Bars
            </li>
            <br />
          </ul></div>
        <div role="tabpanel" class="tab-pane" id="messages">...</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div>
      </div>
    </div>
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
        <ul class="accordian-spec-info-list">
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