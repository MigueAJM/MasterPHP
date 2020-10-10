/*
CONSULTA MULTITABLA
Son cunsultas que sirven para consultar vsrias tablas en una sola sentencia
*/
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

-- MOSTRAR EK NOMBRRE DE LAS CATEGORIAS Y AL LADO CUENTAS ENTRADAS TIENEN
SELECT c.nombre, COUNT(e.id) AS 'Numero Entradas' FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

-- MSOTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN
SELECT u.email, COUNT(titulo) AS 'Numero Entradas'FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id; 


/*
INNER JOIN 
El INNER JOIN se diferencia de todas las demás sentencias de JOIN por mostrar 
un conjunto de resultados mínimos, pues solo se muestran los registros de datos 
del producto cruzado que cumplen la condición de selección. Todo ello se presenta 
en una tabla de resultados llamada “View” que no incluye valores nulos.
*/
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c  ON e.categoria_id = c.id; 