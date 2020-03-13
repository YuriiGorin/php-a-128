<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Добавить пост";
  $pageName = "add";

  $error = "";
  $success = "";

  $author = "";
  $content = "";

  if (isPostRequest()) {
    if (checkRequiredFields(["content", "author"])) {
      $author = post("author");
      $content = post("content");

      if ($author !== "" && $content !== "") {
        $sql = "INSERT INTO microblog SET author='$author', content='$content'";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
          $error = "Ошибка выполнения запроса к базе данных. Наверное, на нашем сайте что-то сломалось и вам надо подождать";
        } else {
          $success = "Запись успешно добавлена!";
          $author = "";
          $content = "";
          header("Location: /lesson-14/");
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
