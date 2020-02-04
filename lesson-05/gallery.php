<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
  <style>
    img {
      transition: 0.5s;
    }
    img:hover {
      transform: scale(1.5);
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body>
<div class="container">
  <h1 class="my-4">Фотогалерея</h1>
  <div class="row">
    <?php
      // получаем массив с названиями всех файлов из папки ./images
      $files = scandir("./images/");
      $counter = 0;
      $allowedExtensions = ["jpg", "png", "jpeg", "tiff", "gif", "bmp"];

      foreach ($files as $file) {
        $info = pathinfo($file);
        // взяли расширение файла и привели строку к нижнему регистру
        $ext = mb_strtolower($info["extension"]);

        // in_array проверяет наличие значения в массиве
        if (in_array($ext, $allowedExtensions)) {
          $counter++;
          ?>
          <div class="col-4 mb-4">
            <div class="card card-default">
              <div class="card-header">Фото #<?= $counter?></div>
              <img src="./images/<?= $file ?>" class="card-img-top" alt="">
              <div class="card-body">
                <?= $file ?>
                <a href="./images/<?= $file ?>" target="_blank">Посмотреть</a>
              </div>
            </div>
          </div>
          <?php
        }
      }
    ?>
  </div>
</div>
</body>
</html>