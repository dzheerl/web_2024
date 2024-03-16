<?php

$footer = [
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

<footer class="footer">
  <div class="footer__background">
    <div class="footer-menu menu">
      <a href="<?= $footer['home_link'] ?>" class="menu__logo-footer">
        <?= $footer['logo'] ?>
      </a>
      <ul class="menu__list">
        <?php foreach ($footer['navigation'] as $list_item) : ?>
          <li>
            <a class="footer-menu__link menu__link" href="#"> <?= $list_item ?> </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</footer>