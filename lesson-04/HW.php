<?php
$n = 1;
$t = 9;

for ($i=3; $i<=$t; $i+=3) {
    $n *= 2; // $n = $n * 2;
}

echo "Кол-во амёб: $n <br>";

$numbers = [5, 1, 0, -4, 10, 3, 1];

$min = $numbers[0];
$max = $numbers[0];

$i = 1;
while ($i < count($numbers)) {
    if ($min > $numbers[$i]) {
        $min = $numbers[$i];
    }

    if ($max < $numbers[$i]) {
        $max = $numbers[$i];
    }

    $i++;
}

echo "Максимальное значение: $max, а минимальное: $min <br>";

$students = ["Валерий", "Елена", "Наталья", "Василий", "Анна"];
for ($i=0; $i<count($students); $i++) {
    if ($i % 2 === 0) {
        echo $students[$i] . "<br>";
    }
}

for ($i=0; $i<count($students); $i+=2) {
    echo $students[$i] . "<br>";
}

$values = [0, 1, 1, 0, 0, 0, 0, 1, 0, 0];
$n = 0;
$zeroCount = 0;
// $oneCount = 0;

for ($i=0; $i<count($values); $i++) {
    if ($values[$i] === 0) {
        $zeroCount++;
    }
}

$oneCount = count($values) - $zeroCount;

echo "Кол-во нулей: $zeroCount, кол-во единиц: $oneCount <br>";

$arr = [];
for ($i=100; $i<=200; $i+=2) {
    $arr[] = $i;
}

echo "<pre>";
print_r($arr);


$randomNumbers = [];
for ($i=0; $i<10; $i++) {
    $randomNumbers[] = mt_rand(10, 30);
}

print_r($randomNumbers);
