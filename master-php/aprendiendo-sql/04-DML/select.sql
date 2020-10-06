--  MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA
SELECT email, nombre, apellidos FROM usuarios;

--  MOSTRAR TODOS LOS EGISTROS
SELECT * FROM usuarios;

--  OPERADORES ARITMETICOS
SELECT email, (4+7) AS operacion FROM usuarios;
SELECT email, (4-7) AS operacion FROM usuarios;
SELECT email, (4*7) AS operacion FROM usuarios;
SELECT email, (4/7) AS operacion FROM usuarios;

SELECT id, email FROM usuarios ORDER BY id ASC;
SELECT id, email FROM usuarios ORDER BY id DESC;
SELECT id, email, (id+3) AS 'OPERACION' FROM usuarios ORDER BY id DESC;