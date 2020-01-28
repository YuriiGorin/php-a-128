<?php

$values = [0, 1, 1, 0, 0, 0, 0, 1, 0, 0];
$zeroCount = 0;

foreach ($values as $index => $value) {
    if ($value === 0) {
        $zeroCount++;
    }
    echo "Индекс: $index, значение: $value <br>";
}


echo "<hr>Кол-во нулей: $zeroCount <hr>";


$numbers = [5, 1, 0, -4, 10, 3, 1];

$sum = 0;

foreach ($numbers as $i => $n) {
    $sum += $n;
    echo "Индекс: $i, значение: $n, получилась сумма $sum <br>";
}

echo "<hr>Итого: $sum<hr>";

$students = ["Валерий", "Елена", "Наталья", "Василий", "Анна"];

echo "<ul>";

foreach ($students as $student) {
    echo "<li>$student</li>";
}

echo "</ul>";


$numbers = [5, -1, 0, -4, 10, -3, 1];
$negativeCount = 0;
foreach ($numbers as $num) {
    if ($num < 0) {
        $negativeCount++;
    }
}

echo "<hr>Кол-во отрицательных чисел $negativeCount<hr>";


$positiveNumbers = [];
foreach ($numbers as $num) {
    if ($num > 0) {
        $positiveNumbers[] = $num;
    }
}

print_r($positiveNumbers);