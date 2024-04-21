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