<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Архивирование поста";
  $pageName = "toArchive";

  if (get("id")) {
    $id = intval(get("id"));
    $sql = "UPDATE microblog SET status='archive' WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
      $error = "Не удалось зархивировать пост из-за ошибки в БД";
    }

    $success = "Пост перемещён в архив";
  } else {
    die("Please specify post id");
  }

  include "./templates/header.php";
  include "./templates/footer.php";