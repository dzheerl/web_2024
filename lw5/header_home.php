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
  <a href="<?= $header['home_link'] ?>" class="menu__logo-header">
    <?= $header['logo'] ?>
  </a>
  <ul class="header-menu__list menu__list">
    <?php foreach ($header['navigation'] as $list_item) : ?>
      <li>
        <a class="header-menu__link menu__link" href="#"> <?= $list_item ?> </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>