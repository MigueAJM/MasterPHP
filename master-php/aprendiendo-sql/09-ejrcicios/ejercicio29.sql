/*
CREAAR UNA VISTA LLAMADA vw_vendedroresA, QUE INCLURIA TODOS 
LOS VENDEDORES DEL GRUPO QUE SE LLLAME "Vendedores A"
*/
CREATE VIEW vw_vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre = "Vendedores A");


SHOW TABLES;
SELECT * FROM vw_vendedoresA;