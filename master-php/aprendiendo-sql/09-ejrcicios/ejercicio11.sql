/*
MOSTRAR TODOS LOS CARGOS Y EL NUMERO DE VENDEDORES QUE HAY EN CADA CA5RGO
*/

SELECT cargo, COUNT(id) AS 'Numero de vendedoress' FROM vendedores GROUP BY cargo ORDER BY COUNT(id) DESC;