/*
MOSTRAR TODOS LOS COCHES, EN CUYA MARCA EXISTA LA LETRA
'A' Y CUYO MODELO EMPIECE POR 'F'
*/
SELECT * FROM coches WHERE marca LIKE '%A%' AND modelo LIKE 'F%';