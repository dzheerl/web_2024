<?php

$title_main_card = 'Featured Posts';
$title_other_card = 'Most Recent'

?>

<div class="content">
  <div class="card-container">
    <h3 class="content-title"> <?= $title_main_card ?> </h3>
    <div class="card-block gap-big">
        <?php
         foreach ($posts as $post) {
           if ($post['size'] == 'big') {
             include 'post_preview.php';
           }
         }
        ?>
    </div>
  </div>
  <div class="card-container">
    <h3 class="content-title"> <?= $title_other_card ?> </h3>
    <div class="card-block gap-small">
        <?php
         foreach ($posts as $post) {
           if ($post['size'] == 'small') {
             include 'post_preview.php';
           }
         }
        ?>
    </div>
  </div>
</div>