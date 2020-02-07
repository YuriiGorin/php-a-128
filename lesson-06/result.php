<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Результат</title>
</head>
<body>
  <h1>Результат обработки запроса</h1>
  <p>Тип запроса: <?= $_SERVER["REQUEST_METHOD"]?></p>
  <pre>
    <?php
      print_r($_POST);
    ?>
  </pre>

  <?php
    // если в массиве есть элемент с ключом userName и также элемент с ключом age
    if (isset($_POST["userName"]) && isset($_POST["age"])) {
      $name = $_POST["userName"];
      $age = $_POST["age"];

      if ($name !== "") {
        if ($age >= 18) {
          echo "Привет, $name";
        } else {
          echo "Давай, до свидания!";
        }
      } else {
        echo "Ты кто?";
      }
    }
  ?>

</body>
</html>