/*
OBTENER UNA LISTA DE LOS NOMBRES DE LOS CLIENTES CON ELIMPORTE DE
SUS ENCARGOS ACUMULADOS
*/
SELECT cl.nombre, SUM(co.precio*e.cantidad) AS 'IMPORTE'
FROM clientes cl
INNER JOIN encargos e ON e.cliente_id = cl.id
INNER JOIN coches co ON e.coche_id =co.id
group by cl.nombre
ORDER BY 2 ASC; 