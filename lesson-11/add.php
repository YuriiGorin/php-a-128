<?php
  include "./inc/connect.php";

  $error = "";
  $success = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $iq = $_POST["iq"];
    $salary = $_POST["salary"];

    if ($firstName !== "" && $lastName !== "" && $age > 0 && $iq > 0 && $salary > 0) {
      $result = mysqli_query($connection, "
            INSERT INTO students 
            SET firstName='$firstName', lastName='$lastName', age=$age, iq=$iq, salary=$salary
        ");

      if (!$result) {
        die("Ошибка при выполнении запроса: " . mysqli_error($connection));
      }

      $success = "Студент добавлен в базу данных!";
    } else {
      $error = "Заполните все поля!";
    }
  }

  include "./templates/header.php";
  include "./templates/form.php";
  include "./templates/footer.php";