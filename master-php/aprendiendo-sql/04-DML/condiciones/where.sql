--  CONSULTAS CON UNA CONDICIÓN
SELECT * FROM usuarios WHERE email = 'migue@migue.com';

/*
OPERADOR DE COMPARACION
IGUAL           =
DUISTINTO       !=
MENOR QUE       <
MAYOR QUE       >
MENOR IGUAL     <=
MAYOR IGUAL     >=
ENTRE           BETWEEN A AND B
EN              IN
ES NULO         IS NULL
NO NULO         IS NOT NULL
COMO            LIKE
NO ES COMO      NOT LIKE
*/

/*
OPERADORES LOGICOS
O     OR
Y     AND
NO    NOT
*/

/*
COMODINES
CUALQUIER CANTIDAD DE CARACTERES    %
UN CARACTER DESCONOCIDO             _

*/

--  EJEMPLOS
SELECT * FROM usuarios;
-- 1.- MOSTRAR NOMBRE Y APELLIDOS DE TODOS LOS USUARIOS REGISTRADOS EN 2020
SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) = 2020;
-- 2.- MOSTRAR NOMBRE Y APELLIDOS DE TODOS LOS USUARIOS QUE NO SE EGISTRARON EN 2020
SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);
-- 3.- MOSTRAR EL EMAIL DE  LOS USUARIOS CUYO APELLIDO CONTENGA LA LETRA "A" Y QUE LA CONTRASEÑA SEA 1234.
SELECT  email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';
-- 4.- MOSTRAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO AÑO SEA PAR
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);
-- 5.- MOSTRAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO NOMBRE TENGA MAS DE 5 LETRAS Y QUE ADEMAS SE
--      HAYAN REGISTRADO DESPUES DEL 2020, MOSTRAR EL NOMBRE EN MAYUSCULAS
SELECT UPPER(nombre)AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha)> 2020;

/*
clausalas
OEDER BY Y LIMIT
*/
SELECT * FROM usuarios ORDER BY fecha DESC;
SELECT * FROM usuarios ORDER BY nombre; -- order by me ordena de acuerdo a la columna que especificque
SELECT *  FROM usuarios LIMIT 1; -- limit me retorna solamente n cantidad de registros
SELECT * FROM usuarios LIMIT 2,1; -- al añadirle un parametro mas  toma el primero como el comienzo, y el segundo como el numero de registros a mostrar
