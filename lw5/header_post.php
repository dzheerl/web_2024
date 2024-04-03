<?php

$header = [
  'home_link' => 'home.php',
  'logo' => 'Escape.',
  'navigation' => [
      'list_item1' => 'home',
      'list_item2' => 'categories',
      'list_item3' => 'about',
      'list_item4' => 'contact',
  ],
];
?>

<div class="header-menu menu">
  <a class="menu__logo-header" href="#">
    Escape.
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