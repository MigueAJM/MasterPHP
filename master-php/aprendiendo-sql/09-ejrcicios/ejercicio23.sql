/*
LISTAR TODOS LOS ENCARGOS REALIZADOS CON LA MARCA DEL COCHE Y EL
NOMBRE DEL CLIENTE
*/
SELECT e.id, co.marca, cl.nombre FROM encargos e
INNER JOIN coches co ON e.coche_id = co.id
INNER JOIN clientes cl ON e.cliente_id = cl.id;