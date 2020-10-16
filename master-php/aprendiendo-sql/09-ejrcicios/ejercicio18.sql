/*
OBTENER UN LISTADO DE CLIENTES QUE HAN HECHO UN ENCARGO DEL COCHE
'Porche Cayene'
*/
SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id 
    IN (SELECT id FROM coches WHERE modelo LIKE '%Porche Cayene%'));