<?php
$featured_posts = [
 [
   'tag' => '',
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be',
   'img_background' => '/static/images/background-card1.png',
   'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
   'author_name' => 'Mat Vogels',
   'publish_date' => '9/25/2015'
 ],
 [
   'tag' => 'adventure',
   'title' => 'From Top Down',
   'subtitle' => 'Once a year, go someplace you’ve never been before.',
   'img_background' => '/static/images/background-card2.png',
   'author_avatar' => '/static/images/avatar=william-wong.jpg',
   'author_name' => 'William Wong',
   'publish_date' => '9/25/2015'
 ],
];
?>
<?php
$most_recent_posts = [
  [
    'img' => '/static/images/small_1.jpg',
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'author_avatar' => '/static/images/avatar=william-wong.jpg',
    'author_name' => 'William Wong',
    'publish_date' => '9/25/2015'
  ],
  [
    'img' => '/static/images/small_2.jpg',
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => '9/25/2015'
  ],
  [
    'img' => '/static/images/small_3.jpg',
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => '9/25/2015'
  ],
  [
    'img' => '/static/images/small_4.jpg',
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'author_avatar' => '/static/images/avatar=william-wong.jpg',
    'author_name' => 'William Wong',
    'publish_date' => '9/25/2015'
  ],
  [
    'img' => '/static/images/small_5.jpg',
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => '9/25/2015'
  ],
  [
    'img' => '/static/images/small_6.jpg',
    'title' => 'Try it Always',
    'subtitle' => 'he world is a book, and those who do not travel read only one pageThe world is a book, and those who do not travel read only one page.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
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
  <link rel="stylesheet" href="/static/styles/main.css">
  <title> Escape. </title>
</head>
<body class="page">
<header>
  <div class="header-menu menu">
    <a href="#">
      <img class="logo" src="/static/images/header_logo.png" alt="Escape.">
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
         foreach ($featured_posts as $featured_posts) {
           include 'post_preview.php';
         }
        ?>
    </div>
  </div>
  <div class="card-container">
    <h3 class="content-title"> Most Recent </h3>
    <div class="card-block gap-small">
        <?php
         foreach ($most_recent_posts as $most_recent_posts) {
           include 'post_preview_small.php';
         }
        ?>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="footer__background">
    <div class="footer-menu menu">
      <img class="logo" src="/static/images/footer_logo.png" alt="Escape.">
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