create table students
(
    id        int auto_increment
        primary key,
    firstName varchar(256)  null,
    lastName  varchar(256)  null,
    age       int default 0 null,
    iq        int default 0 null,
    salary    int default 0 null
);

INSERT INTO myFirstDb.students (id, firstName, lastName, age, iq, salary) VALUES (2, 'Иннокентий', 'Иванов', 15, 150, 1200);
INSERT INTO myFirstDb.students (id, firstName, lastName, age, iq, salary) VALUES (3, 'Имран', 'Исмаилов', 19, 120, 1200);
INSERT INTO myFirstDb.students (id, firstName, lastName, age, iq, salary) VALUES (4, 'Аврора', 'Томская', 25, 120, 1200);
INSERT INTO myFirstDb.students (id, firstName, lastName, age, iq, salary) VALUES (5, 'Константин', 'Убей-волк', 23, 140, 1200);
INSERT INTO myFirstDb.students (id, firstName, lastName, age, iq, salary) VALUES (6, 'Сабрина', 'Ведьма', 19, 80, 1000);