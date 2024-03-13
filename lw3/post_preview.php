<a class="card__big" href="#">
  <div class="card height-big-card" style="background: url(<?= $featured_posts['img_background'] ?>)">
    <div class="about-card">
      <h3 class="about-card__title title-big"><?= $featured_posts['title'] ?></h3>
      <h4 class="about-card__description description-big"><?= $featured_posts['subtitle'] ?></h4>
    </div>
    <div class="info info-big">
      <img class="info__avatar" src="<?= $featured_posts['author_avatar'] ?>" alt="Mat Vogels">
      <p class="info__author-name text-big-info"><?= $featured_posts['author'] ?></p>
      <p class="info__publish-date text-big-info"><?= $featured_posts['publish_date'] ?></p>
    </div>
    <?php if ($featured_posts['tag']): ?>
      <div class="card-theme"> <?= $featured_posts['tag'] ?> </div>
    <?php endif ?>
  </div>
</a>

