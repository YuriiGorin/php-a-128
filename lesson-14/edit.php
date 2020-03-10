<?php
  include "./inc/db.php";

  $pageTitle = "Изменить пост";
  $pageName = "edit";

  $error = "";
  $success = "";

  if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
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

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["author"]) && isset($_POST["content"])) {
      $author = $_POST["author"];
      $content = $_POST["content"];

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
