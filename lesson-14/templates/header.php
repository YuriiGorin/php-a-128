<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $pageTitle ?> | Микроблог</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1><?= $pageTitle ?></h1>
    <?php
      if ($pageName !== "404") {
        ?>
        <ul class="nav nav-pills my-4">
          <li class="nav-item">
            <a href="/lesson-14/" class="nav-link <?= $pageName === "index" ? "active" : "" ?>">Список постов</a>
          </li>
          <li class="nav-item">
            <a href="/lesson-14/create.php" class="nav-link <?= $pageName === "add" ? "active" : "text-warning" ?>">Добавить
              пост</a>
          </li>
          <li class="nav-item">
            <a href="/lesson-14/?only-archive=true" class="nav-link <?= $pageName === "index-archive" ? "active" : "" ?>">Архив</a>
          </li>
        </ul>
        <?php
      }
    ?>

    <?php
      if (isset($error) && $error !== "") {
        ?>
          <div class="alert alert-danger mb-4"><?= $error?></div>
        <?php
      }
    ?>

    <?php
      if (isset($success) && $success !== "") {
        ?>
        <div class="alert alert-success mb-4"><?= $success?></div>
        <?php
      }
    ?>
