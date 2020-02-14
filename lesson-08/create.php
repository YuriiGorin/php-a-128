<?php

  // кол-во строк в форме
  $rowCount = 0;

  if (isset($_GET["count"])) {
    $rowCount = intval($_GET["count"]);
  }

  $users = [];
  $errors = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["users"])) {
      $users = $_POST["users"];
      foreach ($users as $i => $user) {
        if (trim($user["name"]) === "") {
          $inputName = "users[$i][name]";
          $errors[$inputName] = true;
        }

        if (trim($user["email"]) === "") {
          $inputName = "users[$i][email]";
          $errors[$inputName] = true;
        }
      }

      if (count($errors) === 0) {
        $handle = fopen("./data.txt", "a");
        foreach ($users as $user) {
          $text = $user["name"] . "|" . $user["email"];
          if (isset($user["subscribe"])) {
            $text .= "|1";
          } else {
            $text .= "|0";
          }

          // дописываем текст (можно использовать fwrite)
          fputs($handle, $text . "\n");
        }

        fclose($handle);

        // если мы сохранили пользователей, то данные в этом массиве нам больше не нужны
        $users = [];
        // ну и строки с полями можно не отображать
        $rowCount = 0;
      }
    }
  }

  $pageTitle = "Добавление пользователя";
  include "./templates/header.php";
  include "./templates/form.php";
  include "./templates/footer.php";
