<?php
  include "./inc/db.php";
  include "./inc/utils.php";

  $pageTitle = "Список постов";
  $pageName = "index";

  $status = "active";

  if (get("only-archive")) {
    $status = "archive";
    $pageName .= "-archive";
  }

  $author = get("author");
  $content = get("content");
  $sort = get("sort");

  $filter = "";
  if ($author !== "" || $content !== "") {
    if ($author !== "") {
      $filter .= " AND  author LIKE '%$author%'";
    }
    if ($content !== "") {
      $filter .= " AND content LIKE '%$content%'";
    }
  }

  $sql = "SELECT * FROM microblog WHERE status='$status' $filter ORDER BY id DESC";
  $result = mysqli_query($connect, $sql);
  if (!$result) {
    die("Ошибка выполнения запроса");
  }

  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  include "./templates/header.php";
  include "./templates/list.php";
  include "./templates/footer.php";
