<?php

  /**
   * Проверяет, что произошел ли POST-запрос
   *
   * @return bool
   */
  function isPostRequest(): bool {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      return true;
    }

    return false;
  }

  /**
   * Проверяет, что в массиве POST присутсвуют все обязательные поля
   *
   * @param array<string> $fields имена полей
   * @return bool true, если все поля есть
   */
  function checkRequiredFields(array $fields): bool {
     foreach ($fields as $field) {
       if (!isset($_POST[$field])) {
         return false;
       }
     }

     return true;
  }

  /**
   * Извлекает одно значение из массива POST по его ключу
   *
   * @param string $key
   * @return mixed|null возвращает null, если значения нет
   */
  function post(string $key) {
    if (isset($_POST[$key])) {
      return $_POST[$key];
    }
    return null;
  }

  /**
   * Извлекает одно значение из массива GET по его ключу
   *
   * @param string $key
   * @return mixed|null возвращает null, если значения нет
   */
  function get(string $key) {
    if (isset($_GET[$key])) {
      return $_GET[$key];
    }
    return null;
  }