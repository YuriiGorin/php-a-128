<?php
  // открываем файл в режиме только чтение
  // в переменную будет сохранён специальный указатель (дескриптор файлов)
  // т.е. не сам файл, а ссылка на ТЕКУЩУЮ позицию в файле
  $handle = fopen("./data.txt", "r");
  $users = [];

  // функция fgets читает одну строку (которую мы сохраняем впеременную $row)
  // и смещает указатель к следующей строке
  // когда текст закончится, функция вернёт false
  while (($row = fgets($handle)) !== false) {
    // функция explode возвращает массив, созданный из текста
    // с использованием указанного разделителя
    // у нас это вертикальная черта
    $parts = explode("|", $row);
    // в конец массива пользователей добавляем ассоциативный массив
    $users[] = [
      "name" => $parts[0],
      "email" => $parts[1],
      // функция trim удаляет все лишние пробелы в начале и конце текста
      "subscribe" => trim($parts[2]),
    ];
  }

  // надо сообщить операционной системе, что мы файлом больше не пользуемся
  fclose($handle);

  $pageTitle = "Список пользователей";
  // теперь index.php включает в себя всё содержимое header.php
  include "./templates/header.php";
  include "./templates/list.php";
  include "./templates/footer.php";