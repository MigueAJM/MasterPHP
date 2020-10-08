-- CONSULTAS DE AGRUPAMIENTO
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categomeria_id from entradas GROUP BY categoria_id;
/*
NOTA: clausala WHERE actua sobre una columna, 
no actu sobre un grupo de datos
HAVING
Esta clusala tiene la misma funcionalidad que la clusala WHERE, solo que esta vaenfocada
a agrupamiento. 
*/

-- CONSULTA DE AGRUPAMIENTO CONCONDICIÓN
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM 
entradas GROUP BY categoria_id HAVING COUNT(titulo) >=3;

-- FUNCONES DE AGRUPAMIENTO
/*
    COUNT   CONTAR NUMERO DE ELEMENTOS
    AVG     MEDIA
    MAX     MAXIMO
    MIN     MINIMO
    SUM     SUMAR TODO EL CONTENIDO DEL GRUPO
*/
SELECT * FROM entradas;
SELECT AVG(id) AS 'MEDIA DE ENTRADAS' FROM entradas;

SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;  
SELECT MIN(id) AS 'Minimo id', titulo FROM entradas;

SELECT SUM(id) AS 'Suma de id' FROM entradas;