<?php

  $user = "root";
  $pass = "";
  $host = "localhost";
  $dbName = "myFirstDb";

  // устанавливаем подключение к базе
  // нужно сохранить результат в переменную, т.к. одновременно можно работать с несколькими базами
  // и необходимо их различать
  $connection = mysqli_connect($host, $user, $pass, $dbName);

  if (!$connection) {
    die("Ошибка подключения к базе данных");
  }