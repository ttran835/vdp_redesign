<div id="video">
  <div class="col-xs-12">
    <!-- 
      I'm not sure how you would want to integrate the video 
      I would assume the easiest way is to do it via an iFrame 
      I styled the vid to look similar to Roman's, just need 
      a way to implement the vid through your end, maybe you 
      can show me how to do this as well
    -->
    <h3>Video Walkaround</h3>
    <?php 
      if ($vehicle->media->video) {
        // Render iframe information
        echo '<iframe width="100%" height="100%" src="'.$vehicle->media->video.'" frameborder="0" allowfullscreen></iframe>';
      } else {
        echo '<p>Walkaround Video Unavailable</p>';
      }
    ?>
  </div>
</div>