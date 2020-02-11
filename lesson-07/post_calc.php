<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .error {
      color: red;
      border: 2px solid;
      padding: 15px;
    }
  </style>
</head>
<body>
<h1>Калькулятор</h1>
<form action="./post_calc.php" method="post">
  <input type="text" name="num1" placeholder="Первое число">
  <input type="text" name="num2" placeholder="Второе число">
  <button type="submit">Посчитать</button>
</form>
<hr>
<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // echo "Выполнен POST-запрос <br>";
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
      $a = $_POST["num1"];
      $b = $_POST["num2"];

      if ($a !== "" && $b !== "") {
        echo "$a + $b =" . ($a + $b) . "<br>";
        echo "$a - $b =" . ($a - $b) . "<br>";
        echo "$a * $b =" . ($a * $b) . "<br>";
        if ($b !== 0) {
          echo "$a / $b =" . ($a / $b);
        }
      } else {
        echo "<p class='error'>Заполните оба поля</p>";
      }

    } else {
      echo "<p class='error'>Заполните корректную форму!</p>";
    }
  }
?>

</body>
</html>