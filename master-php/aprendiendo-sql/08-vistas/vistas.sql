/*
VISTAS:
CONSULTA ALMACENADA EN LA BD QUE SE UTILIZA 
COMO UNA TABLA VIRTUALNO ALMACENA DATOS SINO QUE
UTILIZA ASOCACIONES Y LOSDATOS ORIGNALES DE LAS 
TABLAS, DE FORMA QUE SIEMPRE SE MANTIENEN ACTUAIZADOS.
*/

CREATE VIEW vw_entradas_con_nombre AS
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c  ON e.categoria_id = c.id; 

-- SHOW CREATE VIEW vw_entradas_con_nombre;     no sirve para ver como se ha creado

--ELIMINAR VISTAS
DROP VIEW vw_entradas_con_nombre;