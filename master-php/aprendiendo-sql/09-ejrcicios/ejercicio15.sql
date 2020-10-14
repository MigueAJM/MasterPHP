/*
MOSTRAR LOS CLIENTES QUE MPAS encargos HAN HECHO
Y CUANTOS HICIERON
*/
SELECT c.nombre, COUNT(e.id) FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2; -- ORDER BY 2 ME REPRENSENTA EL COUNT(e.id) de mi select