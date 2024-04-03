<?php

$method = $_SERVER['REQUEST_METHOD'];
echo "{$method} <br>";

$dataAsJson = file_get_contents("php://input");
$dataAsArray = json_decode($dataAsJson, true);

saveImage($dataAsArray['image']);

function saveImage(string $imageBase64) {
  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);

  saveFile("static/image.{$imgExtention}", $imageDecoded);
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
