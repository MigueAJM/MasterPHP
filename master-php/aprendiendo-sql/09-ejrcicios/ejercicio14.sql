/*
MOSTRAR LAS UNIDADES TOTAKES VENDIDAS DE CADA COCHE A CADA CLIENDTE,
MOSTRAR EL NOMBRE DEL PRODUCTO, NUMERO DEL CLIENTE Y LA SUMA DE UNIDADES
*/
SELECT SUM(e.cantidad) AS 'Unidades', ch.modelo AS 'Coche', c.nombre AS 'Cliente' FROM encargos e
INNER JOIN coches ch ON ch.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY c.nombre;