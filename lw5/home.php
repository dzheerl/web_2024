<?php
  const HOST = 'localhost:3306';
  const USERNAME = 'root';
  const PASSWORD = 'Qwerty123';
  const DATABASE = 'Blog';
  function createDBConnection(): mysqli
  {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";
    return $conn;
  }

  function closeDBConnection(mysqli $conn): void
  {
    $conn->close();
  }

  $conn = createDBConnection();
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