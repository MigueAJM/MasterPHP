/*
SACAR LA MEDIA DE SUELDOS ENTRE TODOS LOS VENDEDORES POR GRUPO Y CIUDAD
*/

SELECT CEIL(AVG(v.sueldo)) AS 'Media salaria', g.nombre, g.ciudad FROM vendedores v 
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;;