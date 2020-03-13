<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Изменение статуса";
  $pageName = "change-status";

  $status = get("status");
  $allowableStatuses = ["archive", "active", "deleted"];

  if (!in_array($status, $allowableStatuses)) {
    die("Status is incorrect");
  }

  if (get("id")) {
    $id = intval(get("id"));
    $sql = "UPDATE microblog SET status='$status' WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
      $error = "Не удалось изменить пост из-за ошибки в БД";
    }

    $success = "Статус поста успешно изменён";
  } else {
    die("Please specify post id");
  }

  // функция header изменяет служебные заголовки ответа сервера
  header("Location: /lesson-14/");

  include "./templates/header.php";
  include "./templates/footer.php";