/*
OBTENER UN LISTADO CON LOS ENCARGOS REALIZADOS POR EL CLIENTE
"FRUTERIA ANTONIA"
*/
SELECT  e.id AS 'N° Encargo', e.cantidad,c.nombre,co.modelo, e.fecha 
FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE cliente_id IN
    (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');