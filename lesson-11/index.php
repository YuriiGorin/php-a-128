<?php

  $user = "root";
  $pass = "";
  $host = "localhost";
  $dbName = "myFirstDb";

  // устанавилваем подключение к базе
  // нужно сохранить результат в переменную, т.к. одновременно можно работать с несколькими базами
  // и необходимо их различать
  $connection = mysqli_connect($host, $user, $pass, $dbName);

  if (!$connection) {
    die("Ошибка подключения к базе данных");
  }

  // в переменной $result нет самих запрошенных данных, НО ЕСТЬ служебная ссылка на них
  $result = mysqli_query($connection, "SELECT * FROM students");
  // $result будет равно false, если запрос не получится выполнить (из-за ошибки)
  if (!$result) {
    // поэтому мы останавливаем наш скрипт и получаем из базы данных текст ошибки
    die("Ошибка выполнения запроса: " . mysqli_error($connection));
  }

  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

  include "./templates/header.php";
  include "./templates/list.php";
  include "./templates/footer.php";