<?php
  // константы
  const DB_USER = "root";
  const DB_PASS = "";
  const DB_HOST = "localhost";
  const DB_NAME = "myFirstDb";

  $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  if (!$connect) {
    die("Ошибка подключения к базе данных");
  }
