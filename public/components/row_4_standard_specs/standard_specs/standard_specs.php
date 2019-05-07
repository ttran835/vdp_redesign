<div class="container">
  <div class="col-xs-12">
    <h3>
      <?php
        $specToken = $tokens['standard_specifications'];
        if ($specToken) {
          echo $specToken;
        } else {
          echo 'Standard Specifications';
        }
      ?>
    </h3>
   
    <div id="standard-specification-nav-tabs">
    <!-- Nav tabs -->
      <ul id="" class="nav nav-tabs" role="tablist">
        <?php 
          foreach ($vehicle->equipment->standard as $option => $group) {
            $id = strtolower(preg_replace('/\&*\s*\/*-*,*/', '', $option));
            echo '<li role="presentation"><a href="#'.$id.'" aria-controlers="'.$id.'" role="tab" data-toggle="tab">'.$option.'</a></li>';
          }
          echo '<li role="presentation" class="active"><a href="#hide" aria-controls="hide" role="tab" data-toggle="tab">Hide</a></li>';
        ?>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" id="hide" class="tab-pane fade in active">
          Click one of the tabs to see more features. 
        </div>
        <?php 
          foreach ($vehicle->equipment->standard as $option => $group) {
            $id = strtolower(preg_replace('/\&*\s*\/*-*,*/', '', $option));
            echo '<div role="tabpanel" id="'.$id.'" class="tab-pane fade">';
            echo '<ul class="tab-spec-info-list">';
              foreach ($group as $listItems) {
                echo '<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">'.$listItems.'</li>';
              }
            echo '</ul>';
            echo '</div>';
          }
        ?>
      </div>
    </div>

    <!-- To render accordion drop down on mobile render -->
    <div class="panel-group" id="standard-specification-accordion">
      <?php 
        foreach ($vehicle->equipment->standard as $option => $group) {
          $id = strtolower(preg_replace('/\&*\s*\/*-*,*/', '', $option));
          echo '<div class="panel pdtm-vdp-specs">';
          echo '<a class="panel-title" data-toggle="collapse" data-parent="#standard-specification-accordion" data-target="#'.$id.'-accordion">'.$option.'<i class="fa fa-caret-right"></i></a>';
          echo '<div class="panel-collapse collapse" id="'.$id.'-accordion">';
          echo '<ul class="accordion-spec-info-list">';
          foreach ($group as $listItems) {
            echo '<li>'.$listItems.'</li>';
          }
          echo '</ul>';
          echo '</div>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
</div>