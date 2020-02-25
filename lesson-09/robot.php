<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table {
      border: 1px solid;
      border-collapse: collapse;
    }

    td {
      border: 1px solid;
      width: 15px;
      height: 15px;
    }

    .center {
      background: #ffc6c1;
    }

    .visited {
      /*background: blue;*/
      animation: visitAnim 0.5s forwards step-start;
    }

    @keyframes visitAnim {
      to { background: #f00 }
    }

  </style>
</head>
<body>
<form action="./robot.php" method="post">
  <textarea name="instructions"></textarea>
  <br>
  <button type="submit">Отправить робота на задание</button>
</form>
<hr>
<?php

  $fieldSize = 55;
  $field = [];
  $offset = floor($fieldSize / 2);

  for ($i=0; $i<$fieldSize; $i++) {
    $row = [];
    for ($j=0; $j<$fieldSize; $j++) {
      $row[] = [
        "visits" => 0,
        "order" => 0,
      ];
    }
    $field[] = $row;
  }

  $error = "";
  $allowedCharacters = ["N", "E", "S", "W"];
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["instructions"])) {
      $code = str_split(mb_strtoupper($_POST["instructions"]));
      $x = 0;
      $y = 0;
      $distance = 0;
      $counter = 0;

      if (count($code) % 2 === 0) {
        for ($i=0; $i<count($code)-1; $i+=2) {
          $dir = $code[$i];
          $steps = $code[$i + 1];
          if (in_array($dir, $allowedCharacters) && $steps > 0) {
            if ($dir === "N") {
              for ($j=$y+1; $j<=$y+$steps; $j++) {
                $field[$offset - $j][$x + $offset]["visits"]++;
                if ($field[$offset - $j][$x + $offset]["order"] === 0) {
                  $counter++;
                  $field[$offset - $j][$x + $offset]["order"] = $counter;
                }
              }
              $y += $steps;
            } else if ($dir === "S") {
              for ($j=$y-1; $j>=$y-$steps; $j--) {
                $field[$offset - $j][$x + $offset]["visits"]++;
                if ($field[$offset - $j][$x + $offset]["order"] === 0) {
                  $counter++;
                  $field[$offset - $j][$x + $offset]["order"] = $counter;
                }
              }
              $y -= $steps;
            } else if ($dir === "E") {
              for ($j=$x+1; $j<=$x+$steps; $j++) {
                $field[$offset - $y][$j + $offset]["visits"]++;
                if ($field[$offset - $y][$j + $offset]["order"] === 0) {
                  $counter++;
                  $field[$offset - $y][$j + $offset]["order"] = $counter;
                }

              }
              $x += $steps;
            } else {
              for ($j=$x-1; $j>=$x-$steps; $j--) {
                $field[$offset - $y][$j + $offset]["visits"]++;
                if ($field[$offset - $y][$j + $offset]["order"] === 0) {
                  $counter++;
                  $field[$offset - $y][$j + $offset]["order"] = $counter;
                }
              }
              $x -= $steps;
            }
            //$field[$offset - $y][$x + $offset]++;
            $distance += $steps;
          } else {
            $error = "Введите корректную последовательность команд";
            // прерывает выполнение цикла
            break;
          }
        }
        if ($error === "") {
          $shortDistance = round(hypot($x, $y), 2);
          echo "<p>Робот достиг точки ($x;$y) и проехал $distance м. Расстояние по прямой: $shortDistance</p>";
        }
      } else {
        $error = "Введите чётное кол-во символов";
      }
    }
  }

  if ($error !== "") {
    echo "<p style='color: red'>$error</p>";
  }

  echo "<table>";
  for ($i=0; $i<$fieldSize; $i++) {
    echo "<tr>";
      for ($j=0; $j<$fieldSize; $j++) {
        $visits = $field[$i][$j]["visits"];
        $class = "";

        if ($i == $offset || $j == $offset) {
          $class = "center";
        }

        if ($visits > 0) {
          $class .= " visited";
        }

        $dur = round($field[$i][$j]["order"] * 0.1, 2);

        echo "<td class='$class' style='animation-duration: {$dur}s; animation-delay: {$dur}s'>";
        if ($visits > 0) {
          //echo $visits;
        }
        echo "</td>";
      }
    echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>
