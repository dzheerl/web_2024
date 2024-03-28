<a class="card__<?= $post['size'] ?>" href="/post?id=<?= $post['id'] ?>">
  <div class="card height-<?= $post['size'] ?>-card">
	<img class="card-img-<?= $post['size'] ?>" src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
    <div class="about-card about-card-<?= $post['size'] ?>">
      <h3 class="about-card__title title-<?= $post['size'] ?>"><?= $post['title'] ?></h3>
      <h4 class="about-card__description description-<?= $post['size'] ?>"><?= $post['subtitle'] ?></h4>
    </div>
    <div class="info info-<?= $post['size'] ?>">
      <img class="info__avatar" src="<?= $post['author_avatar'] ?>" alt="<?= $post['author_name'] ?>">
      <p class="info__author-name text-<?= $post['size'] ?>-info"><?= $post['author_name'] ?></p>
      <p class="info__publish-date text-<?= $post['size'] ?>-info">
        <?php
          if ($post['size'] == 'big') {
            echo date("F j, Y", $post['publish_date']);
          } else {
            echo date("n/j/Y", $post['publish_date']);
          }
        ?>
    </div>
    <?php if ($post['tag']): ?>
      <div class="card-theme"> <?= $post['tag'] ?> </div>
    <?php endif ?>
  </div>
</a>

