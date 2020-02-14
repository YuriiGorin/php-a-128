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
    }
  }

  $pageTitle = "Добавление пользователя";
  include "./templates/header.php";
  include "./templates/form.php";
  include "./templates/footer.php";
