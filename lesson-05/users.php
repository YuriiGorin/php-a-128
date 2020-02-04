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
            border-collapse: collapse;
            border: 1px solid #999;
        }

        td, th {
            border: 1px solid #999;
            padding: 8px 15px;
        }

        th {
            background: #ccc;
        }

        tr:hover {
            background: #ff0;
        }
    </style>
</head>
<body>
<?php
$users = [
    ["name" => "Миша", "age" => 9, "city" => "Архангельск"],
    ["name" => "Акакий", "age" => 85, "city" => "Ижевск"],
    ["name" => "Иннокентий", "age" => 50, "city" => "Сыктывкар"],
];
?>

<table border='1' cellspacing='0' cellpadding='8'>
    <tr>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Город</th>
    </tr>
    <?php
    foreach ($users as $user) {
        ?>
        <tr>
            <td><?= $user["name"]?></td>
            <td><?= $user["age"]?></td>
            <td><?= $user["city"]?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
