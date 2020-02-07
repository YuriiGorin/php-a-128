<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Пример отправки формы методом POST</h1>
  <form action="./result.php?test=dsfgdfgdfg" method="get">
    <input type="text" name="userName" placeholder="Введите имя">
    <input type="number" name="age" placeholder="Введите возраст">
    <button type="submit">Отправить</button>
  </form>
</body>
</html>