<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  $rectangles = [
    ["width" => 150, "height" => 120],
    ["width" => 120, "height" => 190],
    ["width" => 190, "height" => 600],
    ["width" => 60, "height" => 60],
  ];

  foreach ($rectangles as $rect) {
    ?>
      <div style="width: <?=$rect["width"]?>px; height: <?=$rect["height"]?>px; background: red; margin: 20px"></div>
    <?php
  }
?>
</body>
</html>