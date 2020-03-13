<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Удаление поста";
  $pageName = "delete";

  if (get("id")) {
    $id = intval(get("id"));
    $sql = "UPDATE microblog SET status='deleted' WHERE id=$id";
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