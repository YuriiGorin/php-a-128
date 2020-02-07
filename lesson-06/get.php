<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<?php
  // функция isset проверяет существование элемента в  массиве, прочитать можно вот так:
  // проверить, есть ли в массиве элемент, ключ которого равен строке "color"
  if (isset($_GET["color"])) {
    $color = $_GET["color"];
  } else {
    $color = "white";
  }
?>
<body style="background: <?= $color ?>">
<p>Метод запроса: <?= $_SERVER["REQUEST_METHOD"]?></p>
<p>Строка запроса: <?php var_dump($_SERVER["QUERY_STRING"])?></p>

<?php
  $query = $_SERVER["QUERY_STRING"];

  // пользоваться информацией из строки запроса можно произвольно по собственному усмотрению
  if ($query === "test") {
    echo "<h1>Тестовая информация</h1>";
  }

?>

<a href="?test">Ссылка со строкой запроса</a> |
<a href="?">Ссылка с пустой строкой</a>

<hr>
<?php
  // интерпретатор автоматически парсит строку запроса в ассоциативный массив
  print_r($_GET);
?>

<hr>
<a href="?color=red">Красный</a> |
<a href="?color=lightgray">Светло-сервый</a> |
<a href="?color=blue">Синий</a> |
<a href="?color=white">Белый</a> |
<a href="?color=pink">Розовый</a> |
</body>
</html>