<?php
  function printGreetings() {
    echo "Hello World";
  }


  // пример комментария PHPDoc

  /**
   * Функция для отрисовки линии из символов
   *
   * @param string $char символ, из которого будет напечатана линия
   * @param int $count длина линии
   */
  function printLine(string $char = "*", int $count = 25) {
    echo "<br>";
    for ($i=0; $i<$count; $i++) {
      echo $char;
    }
    echo "<br>";
  }

  printLine("-", 40);
  printGreetings();
  printLine("_", 20);


  printLine("|");
  echo "test";
  printLine();

  printLine();

  /**
   * Функция для генерации текста SQL-запроса insert
   *
   * @param string $table имя таблицы в БД
   * @param array $data массив в формате ключ => значение
   * @return string текст SQL запроса в виде: INSERT INTO tableName SET key=value, key2=value2
   */
  function sqlInsert(string $table, array $data): string {
    $sql = "INSERT INTO $table SET ";
    foreach ($data as $key => $value) {
      $sql .= " $key='$value',";
    }
    // rtrim удаляем все указанные символы из конца строки (right trim)
    return rtrim($sql, ",");
  }

  echo sqlInsert("students", ["age"=> 18, "name" => "Ivan"]);
  printLine(" ");
  $query = sqlInsert("microblog", ["author"=> "John Doe", "content" => "......."]);
  echo $query;

  // mysqli_query($connection, $query)