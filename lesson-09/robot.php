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
<form action="./robot.php" method="post">
  <textarea name="instructions"></textarea>
  <br>
  <button type="submit">Отправить робота на задание</button>
</form>
<hr>
<?php
  $error = "";
  $allowedCharacters = ["N", "E", "S", "W"];
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["instructions"])) {
      $code = str_split(mb_strtoupper($_POST["instructions"]));
      $x = 0;
      $y = 0;
      $distance = 0;

      if (count($code) % 2 === 0) {
        for ($i=0; $i<count($code)-1; $i+=2) {
          $dir = $code[$i];
          $steps = $code[$i + 1];
          if (in_array($dir, $allowedCharacters) && $steps > 0) {
            if ($dir === "N") {
              $y += $steps;
            } else if ($dir === "S") {
              $y -= $steps;
            } else if ($dir === "E") {
              $x += $steps;
            } else {
              $x -= $steps;
            }
            $distance += $steps;
          } else {
            $error = "Введите корректную последовательность команд";
            // прерывает выполнение цикла
            break;
          }
        }
        if ($error === "") {
          echo "<p>Робот достиг точки ($x;$y) и проехал $distance м.</p>";
        }
      } else {
        $error = "Введите чётное кол-во символов";
      }
    }
  }

  if ($error !== "") {
    echo "<p style='color: red'>$error</p>";
  }
?>
</body>
</html>
