<?php

$tags = [
  'tags_link1' => 'Nature',
  'tags_link2' => 'Photography',
  'tags_link3' => 'Relaxation',
  'tags_link4' => 'Vacation',
  'tags_link5' => 'Travel',
  'tags_link6' => 'Adventure'
];
?>

<ul class="tags-list">
  <?php foreach ($tags as $tags_link) : ?>
    <li class="tags-list__item">
      <a class="tags-list__link" href="#"> <?= $tags_link ?> </a>
    </li>
  <?php endforeach; ?>
</ul>