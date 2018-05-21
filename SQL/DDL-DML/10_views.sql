--Выполните в psql создание новой view с назавнием cars_without_price. Вью должна быть основана на выборке из таблицы cars и должна содержать все поля этой таблицы за исключением price;

DROP VIEW IF EXISTS cars_without_price;
DROP TABLE IF EXISTS cars;

CREATE TABLE cars (
    id integer PRIMARY KEY,
    name character varying UNIQUE NOT NULL,
    price numeric
);

INSERT INTO cars VALUES (1, 'nissan', 1.12);

-- BEGIN (write your solution here)
CREATE VIEW cars_without_price AS 
    SELECT id, name 
    FROM cars;
-- END
