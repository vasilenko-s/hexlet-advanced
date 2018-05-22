--Таблица departments содержит все подразделения компании.

| id | name  |
|----|-------|
| 1  | IT    |
| 2  | Sales |

Таблица employees содержит всех работников. Каждый работник имеет id и колонку для id подразделения department_id.

+----+-------+--------+---------------+
| id | name  | salary | department_id |
+----+-------+--------+---------------+
| 1  | Joe   | 70000  | 1             |
| 2  | Henry | 80000  | 2             |
| 3  | Sam   | 60000  | 2             |
| 4  | Max   | 90000  | 1             |
+----+-------+--------+---------------+

solution.sql

Напишите SQL запрос который найдет самые большие зарплаты для каждого департамента.

| name  | salary |
|-------|--------|
| IT    | 90000  |
| Sales | 80000  |

Запишите запрос в файл solution.sql.

-- BEGIN (write your solution here)
SELECT d.name, max(salary) AS salary
 FROM departments d JOIN employees e
 ON d.id=e.department_id GROUP BY d.name;
-- END

