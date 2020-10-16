/*
OBTENER UN LISTADO DE CLIENTES ATENDIDOS POR EL VENDEDOR
"DAVID LOPEZ"
*/
SELECT  nombre FROM clientes WHERE vendedor_id IN
    (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');