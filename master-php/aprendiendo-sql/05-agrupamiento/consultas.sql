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
