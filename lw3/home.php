<?php
$posts = [
 [
   'card-theme' => '',
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be',
   'img_background' => './static/img/background-card1.png',
   'author_avatar' => './static/img/avatar-mat-vogel.jpg',
   'author' => 'Mat Vogels',
   'publish_date' => '9/25/2015'
 ],
 [
   'card-theme' => 'card-theme',
   'title' => 'From Top Down',
   'subtitle' => 'Once a year, go someplace you’ve never been before.',
   'img_background' => './static/img/background-card2.png',
   'author_avatar' => './static/img/avatar=william-wong.jpg',
   'author' => 'William Wong',
   'publish_date' => '9/25/2015'
 ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./static/css/main.css">
  <title> Escape. </title>
</head>
<body class="page">
<header>
  <div class="header-menu menu">
    <a href="#">
      <img class="logo" src="./static/img/header_logo.png" alt="Escape.">
    </a>
    <ul class="header-menu__list menu__list">
      <li>
        <a class="header-menu__link menu__link" href="#"> home </a>
      </li>
      <li>
        <a class="header-menu__link menu__link" href="#"> categories </a>
      </li>
      <li>
        <a class="header-menu__link menu__link" href="#"> about </a>
      </li>
      <li>
        <a class="header-menu__link menu__link" href="#"> contact </a>
      </li>
    </ul>
  </div>
  <div class="about-page">
    <h1 class="about-page__title"> Let's do it together. </h1>
    <h2 class="about-page__subtitle"> We travel the world in search of stories. Come along for the ride. </h2>
    <a href="#">
      <p class="about-page__button"> View Latest Posts </p>
    </a>
  </div>
</header>
<ul class="tags-list">
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Nature </a>
  </li>
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Photography </a>
  </li>
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Relaxation </a>
  </li>
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Vacation </a>
  </li>
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Travel </a>
  </li>
  <li class="tags-list__item">
    <a class="tags-list__link" href="#"> Adventure </a>
  </li>
</ul>
<div class="content">
  <div class="card-container">
    <h3 class="content-title"> Featured Posts </h3>
    <div class="card-block gap-big">
        <?php
         foreach ($posts as $post) {
           include 'post_preview.php';
         }
        ?>
    </div>
  </div>
  <div class="card-container">
    <h3 class="content-title"> Featured Posts </h3>
    <div class="card-block gap-small">
      <a class="card__small" href="#">
        <div class="card">
          <img src="./static/img/small_1.jpg" alt="image">
          <div class="about-card about-card-small">
            <h3 class="about-card__title title-small"> Still Standing Tall </h3>
            <h4 class="about-card__description description-small"> Life begins at the end of your comfort zone. </h4>
          </div>
          <div class="info grey info-small border">
            <img class="info__avatar " src="./static/img/avatar=william-wong.jpg" alt="William Wong">
            <p class="info__author-name text-small-info"> William Wong </p>
            <p class="info__publish-date text-small-info"> 9/25/2015 </p>
          </div>
        </div>
      </a>
      <a class="card__small" href="#">
        <div class="card">
          <img src="./static/img/small_2.jpg" alt="image">
          <div class="about-card about-card-small">
            <h3 class="about-card__title title-small"> Sunny Side Up </h3>
            <h4 class="about-card__description description-small"> No place is ever as bad as they tell you it’s going to be. </h4>
          </div>
          <div class="info grey info-small border">
            <img class="info__avatar " src="./static/img/avatar-mat-vogel.jpg" alt="Mat Vogels">
            <p class="info__author-name text-small-info"> Mat Vogels </p>
            <p class="info__publish-date text-small-info"> 9/25/2015 </p>
          </div>
        </div>
      </a>
      <a class="card__small" href="#">
        <div class="card">
          <img src="./static/img/small_3.jpg" alt="image">
          <div class="about-card about-card-small">
            <h3 class="about-card__title title-small"> Water Falls </h3>
            <h4 class="about-card__description description-small"> We travel not to escape life, but for life not to escape us. </h4>
          </div>
          <div class="info grey info-small border">
            <img class="info__avatar" src="./static/img/avatar-mat-vogel.jpg" alt="Mat Vogels">
            <p class="info__author-name text-small-info"> Mat Vogels </p>
            <p class="info__publish-date text-small-info"> 9/25/2015 </p>
          </div>
        </div>
      </a>
        <a class="card__small" href="#">
          <div class="card">
            <img src="./static/img/small_4.jpg" alt="image">
            <div class="about-card about-card-small">
              <h3 class="about-card__title title-small"> Through the Mist </h3>
              <h4 class="about-card__description description-small"> Travel makes you see what a tiny place you occupy in the world. </h4>
            </div>
            <div class="info grey info-small border">
              <img class="info__avatar" src="./static/img/avatar=william-wong.jpg" alt="William Wong">
              <p class="info__author-name text-small-info"> William Wong </p>
              <p class="info__publish-date text-small-info"> 9/25/2015 </p>
            </div>
          </div>
      </a>
      <a class="card__small" href="#">
        <div class="card">
          <img src="./static/img/small_5.jpg" alt="image">
          <div class="about-card about-card-small">
            <h3 class="about-card__title title-small"> Awaken Early </h3>
            <h4 class="about-card__description description-small"> Not all those who wander are lost. </h4>
          </div>
          <div class="info grey info-small border">
            <img class="info__avatar" src="./static/img/avatar-mat-vogel.jpg" alt="Mat Vogels">
            <p class="info__author-name text-small-info"> Mat Vogels </p>
            <p class="info__publish-date text-small-info"> 9/25/2015 </p>
          </div>
        </div>
      </a>
      <a class="card__small" href="#">
        <div class="card">
          <img src="./static/img/small_6.jpg" alt="image">
          <div class="about-card about-card-small">
            <h3 class="about-card__title title-small"> Try it Always </h3>
            <h4 class="about-card__description description-small"> The world is a book, and those who do not travel read only one page. </h4>
          </div>
          <div class="info grey info-small border">
            <img class="info__avatar" src="./static/img/avatar-mat-vogel.jpg" alt="Mat Vogels">
            <p class="info__author-name text-small-info"> Mat Vogels </p>
            <p class="info__publish-date text-small-info"> 9/25/2015 </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="footer__background">
    <div class="footer-menu menu">
      <img class="logo" src="./static/img/footer_logo.png" alt="Escape.">
      <ul class="menu__list">
        <li>
          <a class="footer-menu__link menu__link" href="#"> home </a>
        </li>
        <li>
          <a class="footer-menu__link menu__link" href="#"> categories </a>
        </li>
        <li>
          <a class="footer-menu__link menu__link" href="#"> about </a>
        </li>
        <li>
          <a class="footer-menu__link menu__link" href="#"> contact </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>