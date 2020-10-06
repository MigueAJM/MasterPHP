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

--  FUNCIONES GENERALES
SELECT email, ISNULL(apellidos) FROM usuarios; -- Nos retorna true o false
SELECT STRCMP('HOLA','HOLA') FROM usuarios; -- COMPARA LOS STRRING, RETORNA TRUE O FALSE
SELECT VERSION(); -- versión de mysql
SELECT USER() FROM usuarios; -- RETORNA USUARIO 
SELECT DISTINCT USER() FROM usuarios; -- RETORNA USUARIOS, PERO CON DISTINCT SOLO ME MOSTRARA 1 SOLA VEZ EL MISMO USUARIO
SELECT DATABASE(); -- NOS RETORNA LA DB EN USO
SELECT IFNULL(email, 'ESTE CAMPO ESTA') FROM usuarios; -- Nos rellena los campos nulos con la cadena que le indiquemos
