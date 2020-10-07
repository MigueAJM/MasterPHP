-- CONSULTAS DE AGRUPAMIENTO
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id from entradas GROUP BY categoria_id;