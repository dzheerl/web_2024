<?php
$postId = $_GET['id'];
include 'SQLconnect.php';

$sql = "SELECT * FROM post WHERE post_id = {$postId}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$text = explode('\n', $row['content']);
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
  <link rel="stylesheet" href="/static/styles/styles.css">
  <title> <?= $row['title']?> </title>
</head>
<body class="page">
  <?php
    include 'header_post.php';
  ?>
  <section class="page-about">
    <h1 class="page-about__title horizontal-center" > <?= $row['title']?> <?= $postId ?> </h1>
    <p class="page-about__description horizontal-center"> <?= $row['subtitle']?> </p>
  </section>
  <img class="page-img" src="<?= $row['image_url']?>" alt="<?= $row['title']?>"/>
  <div class="page-content horizontal-center">
    <?php foreach ($text as $paragraph): ?>
      <p><?= $paragraph ?></p>
    <?php endforeach; ?>
  </div>
  <?php
    include 'footer.php';
  ?>
</body>
</html>