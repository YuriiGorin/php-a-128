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
  include "./utils.php";

  if (isPostRequest()) {
    if (checkRequiredFields(['a', 'b'])) {
      $a = post('a');
      $b = post('b');
    } else {
      echo "Заполните корректную форму!";
    }
  }
?>
<form action="./index.php" method="post">
  <input type="text" name="a">
  <input type="text" name="b">
  <button type="submit">Сложить</button>
</form>
</body>
</html>