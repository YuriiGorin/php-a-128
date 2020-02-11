<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .current {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php
  $students = ["Валерий", "Елена", "Наталья", "Василий", "Анна"];

  if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];

    if ($sort === "asc") {
      sort($students);
    } else if($sort === "desc") {
      rsort($students);
    }
  } else {
    $sort = "";
  }
?>
<h1>Список студентов</h1>
<a class="<?= $sort === "" ? "current" : ""; ?>" href="?">Без сортировки</a> |
<a class="<?= $sort === "asc" ? "current" : ""; ?>" href="?sort=asc">Сортировать А-Я</a> |
<a class="<?= $sort === "desc" ? "current" : ""; ?>" href="?sort=desc">Сортировать Я-А</a>
<hr>
<?php
  foreach ($students as $student) {
    echo $student . "<br>";
  }
?>
</body>
</html>
