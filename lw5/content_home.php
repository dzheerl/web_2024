<?php

$title_main_card = 'Featured Posts';
$title_other_card = 'Most Recent';

?>

<div class="content">
  <div class="card-container">
    <h3 class="content-title"> <?= $title_main_card ?> </h3>
    <div class="card-block gap-big">
        <?php
          $sql = 'SELECT * FROM post WHERE featured = 0';
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              include 'post_preview.php';
           }
          }else {
            echo "0 results";
          }
        ?>
    </div>
  </div>
  <div class="card-container">
    <h3 class="content-title"> <?= $title_other_card ?> </h3>
    <div class="card-block gap-small">
        <?php
          $sql = 'SELECT * FROM post WHERE featured = 1';
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              include 'post_preview.php';
           }
          }else {
            echo "0 results";
          }
        ?>
    </div>
  </div>
</div>