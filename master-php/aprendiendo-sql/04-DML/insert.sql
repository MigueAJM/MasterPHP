--  INSERTAR NUEVOS REGISTROS
INSERT INTO usuarios VALUES(null, 'Miguel', 'Jimenez', 'migue@migue.com', 'holamundo', '2020-10-05');
INSERT INTO usuarios VALUES(null, 'Angel', 'Jimenez', 'angel@angel.com', 'holamundo', '2020-10-05');
INSERT INTO usuarios VALUES(null, 'Sebastian', 'Jimenez', 'sebastian@sebastian.com', 'holamundo', '2020-10-05');

--  INSERTAR FILAS CON CIERTAS COLUMNAS
INSERT INTO  usuarios(email, password) VALUES('admin@admin.com', 'admin'); --   en este caso fallaria por las restricciones 

