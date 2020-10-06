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

--  FUNCIONES MATEMATICAS
SELECT ABS(7) AS 'OPERACION' FROM usuarios;     -- valor absoluto
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;  -- redondear
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;  -- redondear a la baja
SELECT RAND() AS 'OPERACION' FROM usuarios;  -- numero aleatorio
SELECT PI() AS 'OPERACION' FROM usuarios;  -- valor de PI
SELECT ROUND(7.34, 1) AS 'OPERACION' FROM usuarios;  -- redondear permitiendo dejar los digitos necesarios
SELECT TRUNCATE(7.34, 1) AS 'OPERACION' FROM usuarios;  -- permite quitar decimales

#   https://www.w3resource.com/sql/sql-functions.php   -- Mas funciones math y de texto 

--  FUNCIONES SOBRE TEXTOS
SELECT nombre FROM usuarios;
SELECT UPPER(nombre) FROM usuarios;     -- retorna mayusculas
SELECT LOWER(nombre) FROM usuarios;     -- retorna minusculas
SELECT CONCAT(nombre, ' ', apellidos) AS 'NOMBRE COMPLETO' FROM usuarios;   -- retorna una concatenación
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios; -- retorna mayusculas y la concatenación
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'LONGITUD' FROM usuarios;  -- retorna la longitud
SELECT TRIM(CONCAT('     ', nombre, ' ', apellidos)) AS 'ELIMINAR ESPACIOS' FROM usuarios; -- elimina los espacios de la derecha e izquierda de una cadena de texto

--  FUNCIONES SOBRE FECHAS
SELECT fecha FROM usuarios;
SELECT email, fecha, CURDATE() AS 'NOW' FROM usuarios; -- FECHA ACTUAL
SELECT email, DATEDIFF(CURDATE(), fecha) AS 'DIFERENCIA-DÍAS' FROM usuarios; -- DIFERENCIA DE DIAS 
SELECT email, DAYNAME(fecha) AS 'DIA' FROM usuarios; -- NOMBRE DEL DÍA
SELECT email, DAYOFMONTH(fecha) AS 'DIA/MES' FROM usuarios; -- DIA DL MES (numero)
SELECT email, DAYOFWEEK(fecha) AS 'DIA/SEMANA' FROM usuarios; -- DIA DE LA SEMANA (numero)
SELECT email, DAYOFYEAR(fecha) AS 'DIA/AÑO' FROM usuarios; -- DIA DEL AÑO (numero)
SELECT email, MONTH(fecha) AS 'MES' FROM usuarios; -- RETORNA EL MES (numero)
SELECT email, YEAR(fecha) AS 'AÑO' FROM usuarios; -- retorna el año
SELECT email, DAY(fecha) AS 'DIA' FROM usuarios; -- DIA DE LA dia
SELECT email, HOUR(fecha) AS 'HORA' FROM usuarios; -- RETORNA LA HORA
SELECT CURTIME() AS 'HORA ACTUAL'; -- HORA ACTUAL
SELECT SYSDATE() AS 'HORA SO'; -- HORA DEL SO
SELECT DATE_FORMAT(fecha, '%d-%m-%Y') AS 'FECHA/FORMATO' FROM usuarios; -- DAR FORMATO A LAS FECHAS

