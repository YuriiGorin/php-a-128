<?php
$matrix = [
    [5, 1, 9],
    [4, 3, 5],
    [2, 6, 1],
];

echo "<pre>";
print_r($matrix[2]);

echo $matrix[1][2];

// найти сумму всех чисел из матрицы

$total = 0;

for ($i=0; $i<count($matrix); $i++) {
    for ($j=0; $j<count($matrix[$i]); $j++) {
        $total += $matrix[$i][$j];
    }
}

echo "<hr>Сумма элементов матрицы: $total <br>";

// вывести матрицу как html-таблицу

echo "<table border='1'>";
for ($n=0; $n<count($matrix); $n++) {
    echo "<tr>";
    for ($m=0; $m<count($matrix[$n]); $m++) {
        echo "<td>{$matrix[$n][$m]}</td>";
    }
    echo "</tr>";
}
echo "</table>";


// найти сумму всех чисел из матрицы

$total = 0;

foreach ($matrix as $row) {
    foreach ($row as $num) {
        $total += $num;
    }
}

echo "<hr>Сумма элементов матрицы: $total <br>";

echo "<table border='1'>";

foreach ($matrix as $row) {
    echo "<tr>";

    foreach ($row as $num) {
        echo "<td>$num</td>";
    }

    echo "</tr>";
}

echo "</table>";