<?php
$sum = 0;
$n = 1;

while ($n <= 7) {
    $sum = $sum + $n; // $sum += $n;
    $n = $n + 1; // инкремент - увеличение значения на 1, можно записать как $n++;
    echo "sum = $sum, n = $n <br>";
}

echo "Сумма чисел равна: " . $sum;

$students = ["Валерий", "Елена", "Наталья", "Василий", "Анна"];
// кол-во элементов в массиве
$studentsCount = count($students);

// инициализация счетчика
$i = 0;

echo "<ul>";
// условие выхода из цикла
while ($i < $studentsCount) {
    echo "<li>" . $students[$i] . "</li>";
    // приращение счетчика
    $i = $i + 1;
}
echo "</ul>";

$numbers = [5, 9, 3, 7, 10, 15];
$sum = 0;
$i = 0;

while ($i < count($numbers)) {
    $sum = $sum + $numbers[$i];
    $i++;
}

echo "Сумма чисел в массиве (while) $sum <br>";

$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $sum = $sum + $numbers[$i];
}

echo "Сумма чисел в массив (for) $sum <br>";
