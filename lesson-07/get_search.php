<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  $users = [
    ["name" => "Миша", "age" => 9, "city" => "Архангельск"],
    ["name" => "Акакий", "age" => 85, "city" => "Ижевск"],
    ["name" => "Иннокентий", "age" => 50, "city" => "Сыктывкар"],
    ["name" => "Жорик", "age" => 50, "city" => "Караганда"],
  ];

  if (isset($_GET["age"])) {
    // $age = (int)$_GET["age"];
    $age = intval($_GET["age"]);
  } else {
    $age = null;
  }

  if (isset($_GET["interval"])) {
    $interval = $_GET["interval"];
  } else {
    $interval = "exact";
  }
?>
<h1>Список пользователей</h1>
<form action="./get_search.php" method="get">
  <label for="age">Возраст для поиска</label>
  <input type="text" id="age" name="age" value="<?= $age?>">

  <label><input <?= $interval === "low" ? "checked" : ""?> type="radio" name="interval" value="low"> Младше</label>
  <label><input <?= $interval === "exact" ? "checked" : ""?> type="radio" name="interval" value="exact"> Точное совпадение</label>
  <label><input <?= $interval === "high" ? "checked" : ""?> type="radio" name="interval" value="high"> Старше</label>

  <button type="submit">Найти</button>
</form>
<hr>
<?php
  echo "<ul>";
  $notFound = true;
  foreach ($users as $user) {
    if ($interval === "exact" && $age === $user["age"]) {
      $showUser = true;
    } else if ($interval === "low" && $age >= $user["age"]) {
      $showUser = true;
    } else if ($interval === "high" && $age <= $user["age"]) {
      $showUser = true;
    } else {
      $showUser = false;
    }

    if ($showUser) {
      echo "<li>" . $user["name"] . ": " . $user["age"];
      $notFound = false;
    }
  }
  echo "</ul>";

  if ($notFound) {
    echo "<p>Никто не найден :(</p>";
  }
?>
</body>
</html>