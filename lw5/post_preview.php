<?php
  $temp = $row['featured'];
  if ($temp == '1') {
    $size = 'big';
  } else {
    $size = 'small';
  }
?>

<a class="card__<?= $size ?>" href="/post?id=<?= $row['post_id'] ?>">
  <div class="card height-<?= $size ?>-card">
	<img class="card-img-<?= $size ?>" src="<?= $row['image_url'] ?>" alt="<?= $row['title'] ?>">
    <div class="about-card about-card-<?= $size ?>">
      <h3 class="about-card__title title-<?= $size ?>"><?= $row['title'] ?></h3>
      <h4 class="about-card__description description-<?= $size ?>"><?= $row['subtitle'] ?></h4>
    </div>
    <div class="info info-<?= $size ?>">
      <img class="info__avatar" src="<?= $row['author_url'] ?>" alt="<?= $row['author'] ?>">
      <p class="info__author-name text-<?= $size ?>-info"><?= $row['author'] ?></p>
      <p class="info__publish-date text-<?= $size ?>-info">
        <?php
          if ($row['featured'] == '1') {
            echo date("F j, Y", $row['publish_date']);
          } else {
            echo date("n/j/Y", $row['publish_date']);
          }
        ?>
    </div>
    <?php if ($row['tag']): ?>
      <div class="card-theme"> <?= $row['tag'] ?> </div>
    <?php endif ?>
  </div>
</a>

