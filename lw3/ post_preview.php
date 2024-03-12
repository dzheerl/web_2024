<a class="card__big" href="#">
<div class="card height-big-card" style="background: url(<?= $post['img_background'] ?>)">
  <div class="about-card">
    <h3 class="about-card__title title-big"><?= $post['title'] ?></h3>
    <h4 class="about-card__description description-big"><?= $post['subtitle'] ?></h4>
  </div>
  <div class="info info-big">
    <img class="info__avatar" src="<?= $post['author_avatar'] ?>" alt="Mat Vogels">
    <p class="info__author-name text-big-info"><?= $post['author'] ?></p>
    <p class="info__publish-date text-big-info"><?= $post['publish_date'] ?></p>
  </div>
</div>
</a>