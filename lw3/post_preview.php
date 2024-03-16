<a class="card__<?= $post['size'] ?>" href="#">
  <div class="card height-<?= $post['size'] ?>-card">
	<img class="card-img-<?= $post['size'] ?>" src="<?= $post['img'] ?>" alt="">
    <div class="about-card about-card-<?= $post['size'] ?>">
      <h3 class="about-card__title title-<?= $post['size'] ?>"><?= $post['title'] ?></h3>
      <h4 class="about-card__description description-<?= $post['size'] ?>"><?= $post['subtitle'] ?></h4>
    </div>
    <div class="info info-<?= $post['size'] ?>">
      <img class="info__avatar" src="<?= $post['author_avatar'] ?>" alt="<?= $post['author_name'] ?>">
      <p class="info__author-name text-<?= $post['size'] ?>-info"><?= $post['author_name'] ?></p>
      <p class="info__publish-date text-<?= $post['size'] ?>-info"><?= $post['publish_date'] ?></p>
    </div>
    <?php if ($post['tag']): ?>
      <div class="card-theme"> <?= $post['tag'] ?> </div>
    <?php endif ?>
  </div>
</a>