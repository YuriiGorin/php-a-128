<?php
  include "./inc/db.php";

  $pageTitle = "Список постов";
  $pageName = "index";

  $sql = "SELECT * FROM microblog ORDER BY id DESC";
  $result = mysqli_query($connect, $sql);
  if (!$result) {
    die("Ошибка выполнения запроса");
  }

  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  include "./templates/header.php";
  include "./templates/list.php";
  include "./templates/footer.php";
