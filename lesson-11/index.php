<?php

  include "./inc/connect.php";

  $sql = "SELECT * FROM students";

  $min = 0;
  if (isset($_GET["min"])) {
    $min = $_GET["min"];
  }

  $max = 0;
  if (isset($_GET["max"])) {
    $max = $_GET["max"];
  }

  if ($max > 0 || $min > 0) {
    $sql .= " WHERE ";
    if ($max > 0) {
      $sql .= " age <= $max";
    }

    if ($max > 0 && $min > 0) {
      $sql .= " AND ";
    }

    if ($min > 0) {
      $sql .= " age >= $min";
    }
  }



  // в переменной $result нет самих запрошенных данных, НО ЕСТЬ служебная ссылка на них
  $result = mysqli_query($connection, $sql);
  // $result будет равно false, если запрос не получится выполнить (из-за ошибки)
  if (!$result) {
    // поэтому мы останавливаем наш скрипт и получаем из базы данных текст ошибки
    die("Ошибка выполнения запроса: " . mysqli_error($connection));
  }

  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

  include "./templates/header.php";
  include "./templates/list.php";
  include "./templates/footer.php";