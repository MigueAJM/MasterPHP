/*
LISTAR EL NOMBRE DEL COCHE, EL NOMBRE DEL CLIENTE Y EL NOMBRE DE 
LA CIUDAD, UNICAMENTE CUANDO SEAN DE BARCELONA
*/

SELECT e.id, co.modelo, cl.nombre, cl.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';