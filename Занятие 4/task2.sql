
-- create
CREATE TABLE task2 (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO task2 VALUES (1, 'Пит', 20, 'Смоленск');
INSERT INTO task2 VALUES (2, 'Алина', 22, 'Москва');
INSERT INTO task2 VALUES (3, 'Маша', 25, 'St.Petersburg');
INSERT INTO task2 VALUES (4, 'Каша', 28, 'Улан-Удэ');

-- fetch 
SELECT * FROM task2;