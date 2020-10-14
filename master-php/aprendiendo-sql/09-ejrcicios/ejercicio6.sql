/*
MOSTRAR EL NOMBRE  Y LOS APELLIDOS DE LOS VENDEDORES
 EN UNA MISMA COLUMNA, SU FECHA DE REGISTRO Y EL DIA 
 DE LA SEMANA EN LA QUE SE REGISTRARON.
*/
SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y Apellidos',
        fecha, DAYNAME(fecha) AS 'Día' FROM vendedores;