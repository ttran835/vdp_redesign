<div id="product-gallery-slideshow" class="product-gallery-slideshow" >
  <div id="product-gallery-detail">
    <?php 
    // all obj var comes from inventory-main
    // to rotate images into the correct position
    // also render single image for carousel

     foreach ($vehicle->media->image as $image) {
       $rotate = $image->rotate;
       $flip = $image->flip;
       if ($rotate === 90 || $rotate === 270) {
         if ($flip === 0) { 
           echo "<div><img class='img-responsive' src='{$image->src}' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
         } else {
           echo "<div><img class='img-responsive' img src='{$image->src}' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
         }
       } else {
         if ($flip === 0) {
           echo "<div><img class='img-responsive' img src='{$image->src}' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
         } else {
           echo"<div><img class='img-respsonsive' img src='{$image->src}' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
         }
       }
     }
    ?>
  </div>
  <div class="product-gallery-nav">
    <?php 
      if (count($vehicle->media->image) > 0) {
        foreach ($vehicle->media->image as $image) {
          $rotate = $image->rotate;
          $flip = $image->flip;
          if ($rotate == 90 || $rotate == 270) {
            if ($flip == 0) { 
              echo "<div><img class='img-responsive pdtm-vdp-img-detail' img data-lazy='{$image->src}'  alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
            } else {
              echo "<div><img class=' img-responsive pdtm-vdp-img-detail' img data-lazy='{$image->src}'  alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
            }
          } else {
            if ($flip == 0) {
              echo "<div><img class='img-responsive pdtm-vdp-img-detail' img data-lazy='{$image->src}'  alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
            } else {
              echo "<div><img class='img-responsive pdtm-vdp-img-detail' img data-lazy='{$image->src}'  alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
            }
          }
        }
      }
    ?>
  </div>
</div>
     