/*
OBTENER LISTADO DE CLIENTES (NUMERO DE CLIENTE Y EL NOMBRE)
MOSTRAR EL NUMERO DE VENDEDOR Y SU NOMBRE
*/
SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR'
FROM clientes c
INNER JOIN vendedores v ON  v.id = c.vendedor_id;

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;