<?php
  include "./inc/db.php";

  $pageTitle = "Удаление поста";
  $pageName = "delete";

  if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $sql = "DELETE FROM microblog WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
      $error = "Не удалось удалить пост из-за ошибки в БД";
    }

    $success = "Пост успешно удалён";
  } else {
    die("Please specify post id");
  }

  include "./templates/header.php";
  include "./templates/footer.php";