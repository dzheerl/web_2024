<?php

$about_page = [
  'title' => 'Lets do it together.',
  'subtitle' => 'We travel the world in search of stories. Come along for the ride.',
  'button_text' => 'View Latest Posts'
];
?>

<div class="about-page">
  <h1 class="about-page__title"> <?= $about_page['title'] ?> </h1>
  <h2 class="about-page__subtitle"> <?= $about_page['subtitle'] ?> </h2>
  <a href="#">
    <p class="about-page__button"> <?= $about_page['button_text'] ?> </p>
  </a>
</div>