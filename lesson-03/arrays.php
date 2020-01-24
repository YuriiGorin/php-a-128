<pre>
<?php
    $months = ["Январь", "Февраль", "Март", "Апрель"];
    // добавление элемента в конец массива
    $months[] = "Май";
    // можно добавить ещё и вот так (тоже в конец)
    array_push($months, "Июнь");
    $n = 5;

    // вывести значение элемента с индексом, равным значению переменной $n - 1
    echo $months[$n - 1] . "<br>";

    $students = ["Валерий", "Елена", "Наталья", "Василий", "Анна"];

    sort($students);

    // echo $students; -- эхо не работает
    // var_dump($students);
    print_r($students);

    echo "<hr>";

    echo implode(",", $students);
    echo "<br>";
    echo "<ul><li>" . implode("</li><li>", $students) . "</li></ul>";
