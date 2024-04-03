<?php

$footer = [
  'home_link' => 'home.php',
  'logo' => 'Escape.',
  'navigation' => [
      'home',
      'categories',
      'about',
      'contact',
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
        <?php foreach ($footer['navigation'] as $listItem) : ?>
          <li>
            <a class="footer-menu__link menu__link" href="#"> <?= $listItem ?> </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</footer>