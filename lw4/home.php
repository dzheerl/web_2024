<?php

$posts = [
  [
   'id' => '1',
   'size' => 'big',
   'img' => '/static/images/background-card1.png',
   'tag' => '',
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be',
   'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
   'author_name' => 'Mat Vogels',
   'publish_date' => 1443185757
  ],
  [
   'id' => '2',
   'size' => 'big',
   'img' => '/static/images/background-card2.png',
   'tag' => 'adventure',
   'title' => 'From Top Down',
   'subtitle' => 'Once a year, go someplace you’ve never been before.',
   'author_avatar' => '/static/images/avatar=william-wong.jpg',
   'author_name' => 'William Wong',
   'publish_date' => 1443185757
  ],
  [
    'id' => '3',
    'size' => 'small',
    'img' => '/static/images/small_1.jpg',
    'tag' => '',
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'author_avatar' => '/static/images/avatar=william-wong.jpg',
    'author_name' => 'William Wong',
    'publish_date' => 1443185757
  ],
  [
    'id' => '4',
    'size' => 'small',
    'img' => '/static/images/small_2.jpg',
    'tag' => '',
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => 1443185757
  ],
  [
    'id' => '5',
    'size' => 'small',
    'img' => '/static/images/small_3.jpg',
    'tag' => '',
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => 1443185757
  ],
  [
    'id' => '6',
    'size' => 'small',
    'img' => '/static/images/small_4.jpg',
    'tag' => '',
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'author_avatar' => '/static/images/avatar=william-wong.jpg',
    'author_name' => 'William Wong',
    'publish_date' => 1443185757
  ],
  [
    'id' => '7',
    'size' => 'small',
    'img' => '/static/images/small_5.jpg',
    'tag' => '',
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => 1443185757
  ],
  [
    'id' => '8',
    'size' => 'small',
    'img' => '/static/images/small_6.jpg',
    'tag' => '',
    'title' => 'Try it Always',
    'subtitle' => 'The world is a book, and those who do not travel read only one page.',
    'author_avatar' => '/static/images/avatar-mat-vogel.jpg',
    'author_name' => 'Mat Vogels',
    'publish_date' => 1443185757
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
    <?php
      include 'header_home.php';
    ?>
    <?php
      include 'about_page_home.php';
    ?>
  </header>
  <?php
    include 'tags_home.php';
  ?>
  <?php
    include 'content_home.php';
  ?>
  <?php
    include 'footer.php';
  ?>
</body>
</html>