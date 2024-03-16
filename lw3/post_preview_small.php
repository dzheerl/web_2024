<a class="card__small" href="#">
  <div class="card">
    <img src="<?= $most_recent_posts['img'] ?>" alt="image">
    <div class="about-card about-card-small">
      <h3 class="about-card__title title-small"> <?= $most_recent_posts['title'] ?> </h3>
      <h4 class="about-card__description description-small"> <?= $most_recent_posts['subtitle'] ?> </h4>
    </div>
    <div class="info grey info-small border">
      <img class="info__avatar " src="<?= $most_recent_posts['author_avatar'] ?>" alt="William Wong">
      <p class="info__author-name text-small-info"> <?= $most_recent_posts['author_name'] ?> </p>
      <p class="info__publish-date text-small-info"> <?= $most_recent_posts['publish_date'] ?> </p>
    </div>
  </div>
</a>