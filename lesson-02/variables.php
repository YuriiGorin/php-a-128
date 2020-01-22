<?php
    $greeting = "Hello World";
    var_dump($greeting);

    echo "<h1 style=\"color: red\">Hey there</h1>";

    $number = 5.5;
    var_dump($number);

    // в двойных кавычках интерпретатор вставит в текст значение переменной, а не её название
    echo "<h2>$greeting</h2>";
    // в одинарных кавычках подстановка переменных не работает
    echo '<h2>$greeting</h2>';

    // конкатенация (соединение) строк - оператор ТОЧКА
    echo '<h2>' . $greeting . '</h2>';


    $a = 5;
    $b = 10;

    var_dump($a > $b);