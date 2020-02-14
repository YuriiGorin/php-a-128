<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $pageTitle?></title>
<style>
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    background: linear-gradient(to bottom, #ccc, #fff);
  }

  body {
    background: #999;
  }

  h1 {
    border-bottom: 2px solid;
  }

  footer {
    max-width: 600px;
    margin: 0 auto;
    background: #222;
    color: #f1f1f1;
    padding: 10px 30px;
  }

  nav {
    text-align: center;
    padding: 30px;
  }

  nav a {
    padding: 0 10px;
    color: #222;
  }

  nav a + a {
    border-left: 2px solid;
  }

  .error {
    box-shadow: 0 0 10px rgba(255,0,0,0.6);
    background: #fff4bd;
  }
</style>
</head>
<body>
<nav>
  <a href="/lesson-08">Главная страница</a>
  <a href="/lesson-08/create.php">Добавить пользователя</a>
</nav>
<div class="container">
  <h1><?= $pageTitle?></h1>