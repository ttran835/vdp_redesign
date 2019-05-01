<div id="specification-content">
  <table>
    <tbody>
      <tr>
        <th>Specification</th>
      </tr>
      <?php 
      $testArray = array(
        'Spec', 'Spec', 'Spec', 'Spec', 'Spec', 'Spec', 'Spec', 'Spec'
      );
      foreach ($testArray as $spec) {
        echo '<tr>';
          echo '<td>'.$spec.'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>