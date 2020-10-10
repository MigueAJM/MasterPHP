/*
CONSULTA MULTITABLA
Son cunsultas que sirven para consultar vsrias tablas en una sola sentencia
*/
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;