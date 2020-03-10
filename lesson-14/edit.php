<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Изменить пост";
  $pageName = "edit";

  $error = "";
  $success = "";

  if (get("id") > 0) {
    $id = intval(get("id"));
    $sql = "SELECT * FROM microblog WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    // одна строка в виде ассоциативного массива
    $post = mysqli_fetch_assoc($result);
    if (!$result) {
      die("Invalid request");
    }
  }

  $author = $post["author"];
  $content = $post["content"];

  if (isPostRequest()) {
    if (checkRequiredFields(["content", "author"])) {
      $author = post("author");
      $content = post("content");

      if ($author !== "" && $content !== "") {
        $sql = "UPDATE microblog SET author='$author', content='$content' WHERE id=$id";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
          $error = "Ошибка выполнения запроса к базе данных. Наверное, на нашем сайте что-то сломалось и вам надо подождать";
        } else {
          $success = "Запись успешно сохранена!";
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
