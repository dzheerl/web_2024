<?php

$method = $_SERVER['REQUEST_METHOD'];
echo "{$method} <br>";

$dataAsJson = file_get_contents("php://input");
$dataAsArray = json_decode($dataAsJson, true);
if ($dataAsArray["title"] == "") {
  echo "тест";
};

if (empty($dataAsArray) || !isset($dataAsArray["title"])) {
    echo "Ошибка: Некорректные данные или отсутствует обязательное поле 'name'";
} else {
    addPost($dataAsArray);
};


function addPost($dataAsArray) {
    include 'SQLconnect.php';

    // Извлекаем необходимые данные из $dataAsArray
    $title = $dataAsArray["title"];
    echo "{$dataAsArray["title"]}";
    $subtitle = $dataAsArray["subtitile"];
    $content = $dataAsArray["content"];
    $author = $dataAsArray["author"];
    $author_url = $dataAsArray["author_url"];
    $publish_date = $dataAsArray["publish_date"];
    $featured = $dataAsArray["featured"];

    // Подготавливаем SQL запрос с использованием подготовленного выражения для безопасной вставки данных
    $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, featured)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Подготавливаем и выполняем запрос с использованием подготовленного выражения
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Ошибка при подготовке запроса: " . $conn->error;
        return;
    }

    // Привязываем параметры и выполняем запрос
    $stmt->bind_param('ssssssi', $title, $subtitle, $content, $author, $author_url, $publish_date, $featured);
    $result = $stmt->execute();

    if ($result) {
        $lastInsertId = $conn->insert_id; // Получаем id последней вставленной записи
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

    // Закрываем запрос
    $stmt->close();
}


//$imagePathEcho = "";
//$imagePathEcho = saveImage($dataAsArray['image'], $imagePathEcho);
//echo "<br>{$imagePathEcho}";

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

function saveFile(string $file, string $data): void {
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
