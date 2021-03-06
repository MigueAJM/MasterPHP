/*
30.MOSTRAR LOS DATOS DEL VENDEDOR CON MÁS ANTIGUEDAD EN EL
CONCESIONARIO
*/
SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*
30PLUS 
OBTENER LOS DATOS DE LOS COCHES CON MÁS UNIDADES VENDIDAS
*/

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN(
        SELECT MAX(cantidad) FROM encargos
    ));

/*
    NOTA:
        LOS LIMIT NO SE PUEDEN USAR EN SUBCONSULTAS
*/