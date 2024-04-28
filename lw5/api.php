<?php


$dataAsJson = file_get_contents("php://input");
$dataAsArray = json_decode($dataAsJson, true);

if (empty($dataAsArray)) {
    echo "Ошибка: Заполните обязательные поля.";
} elseif ($dataAsArray["title"] == "") {
    echo "Ошибка: Заполните обязательное поле 'Название'.";
} elseif ($dataAsArray["subtitle"] == "") {
    echo "Ошибка: Заполните обязательное поле 'Заголовок'.";
} elseif ($dataAsArray["content"] == "") {
    echo "Ошибка: Заполните обязательное поле 'Содержание'.";
} elseif ($dataAsArray["author"] == "") {
    echo "Ошибка: Заполните обязательное поле 'Автор'.";
} elseif ($dataAsArray["author_url"] == "") {
    echo "Ошибка: Заполните обязательное поле 'URL автора'.";
} elseif ($dataAsArray["publish_date"] == "") {
    echo "Ошибка: Заполните обязательное поле 'Дата публикации'.";
} elseif (!strtotime($dataAsArray["publish_date"])) {
    echo "Ошибка: Некорректный формат даты публикации YYYY-MM-DD.";
} elseif ($dataAsArray["featured"] !== "0" && $dataAsArray["featured"] !== "1") {
      echo "Ошибка: Поле 'featured' должно быть равно '0' или '1'.";
} else {
    addPost($dataAsArray);
}



function addPost($dataAsArray) {
    include 'SQLconnect.php';

    $title = $dataAsArray["title"];
    echo "{$dataAsArray["title"]}";
    $subtitle = $dataAsArray["subtitle"];
    $content = $dataAsArray["content"];
    $author = $dataAsArray["author"];
    $author_url = $dataAsArray["author_url"];
    $publish_date = strtotime($dataAsArray["publish_date"]);
    $featured = $dataAsArray["featured"];
    $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, featured)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Ошибка при подготовке запроса: " . $conn->error;
        return;
    }

    $stmt->bind_param('ssssssi', $title, $subtitle, $content, $author, $author_url, $publish_date, $featured);
    $result = $stmt->execute();

    if ($result) {
        $lastInsertId = $conn->insert_id;
        $stmt->close();
        $imagePathEcho = "";
        $imagePathEcho = saveImage($dataAsArray['image'], $imagePathEcho, $lastInsertId, $conn);
        echo "<br>{$imagePathEcho}";
        return $lastInsertId;

    } else {
        echo "Ошибка при выполнении запроса: " . $stmt->error;
        $stmt->close();
        return false;
    }

    $stmt->close();
}

function saveImage(string $imageBase64, $imagePath,  $lastInsertId, $conn) {

  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);

  saveFile("static/img/post_id_{$lastInsertId}.{$imgExtention}", $imageDecoded);

  $imagePath = "static/img/post_id_{$lastInsertId}.{$imgExtention}";
  $sql = "UPDATE post
          SET image_url = '{$imagePath}'
          WHERE post_id = '{$lastInsertId}'";
  $insertBD = $conn->query($sql);
  echo "$insertBD";
  return $imagePath;
}

function saveFile(string $file, string $data) {
  $myFile = fopen($file, 'w');
  if (!$myFile) {
    echo 'Произошла ошибка при открытии файла';
    return;
  }


  $result = fwrite($myFile, $data);
  if ($result) {
    echo 'Данные успешно сохранены в файл';
  } else {
    echo 'Произошла ошибка при сохранении данных в файл';
  }
  fclose($myFile);
}
