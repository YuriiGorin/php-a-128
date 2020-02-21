# MySQL
## Подключение к СУБД через терминал
```
mysql -uимяПользователя
```
например: 

``mysql -uroot``

где root - имя основного пользователя
в OpenServer это пользователь по умолчанию без пароля

выход из СУБД осуществляется командой ``quit``

## Примеры простых запросов на SQL
* Показать список всех доступных баз данных на сервере 
``SHOW DATABASES;``
* Список доступных таблиц в базе ``SHOW TABLES;``
* Подробная информация о таблице ``DESCRIBE table_name;``
* Подключение к конкретной базе: ``USE database_name;``


## Примеры CRUD-запросов
Create-Read-Update-Delete

```sql
CREATE DATABASE myFirstDb;
USE myFirstDb;
CREATE TABLE IF NOT EXISTS students (
    id int PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(256),
    lastName VARCHAR(256),
    age int DEFAULT 0,
    iq int DEFAULT 0,
    salary int DEFAULT 0
);

INSERT INTO students SET firstName='Акакий', lastName='Петров', age=55, iq=-3, salary=1;

INSERT INTO students
    (firstName, lastName, age, iq)
VALUES
    ('Иннокентий', 'Иванов', 15, 150),
    ('Имран', 'Исмаилов', 19, 120),
    ('Аврора', 'Томская', 25, 120),
    ('Константин', 'Убей-волк', 23, 140),
    ('Сабрина', 'Ведьма', 19, 80);

SELECT id, firstName, lastName FROM students;

SELECT * FROM students WHERE age > 19 AND age < 55;

SELECT * FROM students WHERE id=3;

SELECT id, firstName, lastName FROM students ORDER BY iq DESC;

UPDATE students SET salary=1200 WHERE iq > 100;

DELETE FROM students WHERE iq < 0;
```