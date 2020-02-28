<?php
  include "./inc/db.php";

  $pageTitle = "Добавить пост";
  $pageName = "add";

  $error = "";
  $success = "";

  $author = "";
  $content = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["author"]) && isset($_POST["content"])) {
      $author = $_POST["author"];
      $content = $_POST["content"];

      if ($author !== "" && $content !== "") {
        $sql = "INSERT INTO microblog SET author='$author', content='$content'";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
          $error = "Ошибка выполнения запроса к базе данных. Наверное, на нашем сайте что-то сломалось и вам надо подождать";
        } else {
          $success = "Запись успешно добавлена!";
          $author = "";
          $content = "";
        }
      } else {
        $error = "Заполните все поля!";
      }

    } else {
      die("Incorrect request");
    }
  }

  include "./templates/header.php";
  include "./templates/form.php";
  include "./templates/footer.php";
