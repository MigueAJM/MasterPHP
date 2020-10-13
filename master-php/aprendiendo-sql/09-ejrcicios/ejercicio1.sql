/*
DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCENSIONARIO
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id      INT(10) AUTO_INCREMENT NOT NULL,
modelo  VARCHAR(100) NOT NULL,    
marca   VARCHAR (50),
precio  INT(20) NOT NULL,
stock   INT(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE grupos(
id      INT(10) AUTO_INCREMENT NOT NULL,
nombre  VARCHAR(100) NOT NULL,
ciudad  VARCHAR(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id          INT(10) AUTO_INCREMENT NOT NULL,        
grupo_id    INT(10) NOT NULL,
jefe        INT(10),
nombre      VARCHAR(100) NOT NULL,
apellidos   VARCHAR(150),
cargo       VARCHAR(50),
fecha       DATE,
sueldo      FLOAT(20,2),
comision    FLOAT(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id) 
)ENGINE=InnoDB;

CREATE TABLE clientes(
id              INT(10) AUTO_INCREMENT NOT NULL,
vendedor_id     INT(10),
nombre          VARCHAR (150) NOT NULL,
ciudad          VARCHAR(100),
gastado         FLOAT(50,2),
fecha           DATE,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_clientes_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id          INT(10) AUTO_INCREMENT NOT NULL,
cliente_id  INT(10) NOT NULL,
coche_id    INT(10) NOT NULL,
cantidad    INT(100),
fecha       DATE,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

-- COCHES
INSERT INTO  coches VALUES(null, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO  coches VALUES(null, 'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
INSERT INTO  coches VALUES(null, 'Porche Cayene', 'Porche', 62000, 5);
INSERT INTO  coches VALUES(null, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO  coches VALUES(null, 'Ferrari Spider', 'Ferrari', 245000, 80);
INSERT INTO  coches VALUES(null, 'Saet Panda', 'Seat', 10000, 10);

-- GRUPOS
INSERT INTO grupos VALUES(null, 'vendedores A', 'Madrid');
INSERT INTO grupos VALUES(null, 'vendedores B', 'Madrid');
INSERT INTO grupos VALUES(null, 'Directores Mecanicos', 'Madrid');
INSERT INTO grupos VALUES(null, 'vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(null, 'vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(null, 'vendedores C', 'Valencia');
INSERT INTO grupos VALUES(null, 'vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(null, 'vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(null, 'vendedores C', 'Santiago de Compostela');

-- VENDEDORES
INSERT INTO  vendedores VALUES(null, 1, null, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante en la tienda', CURDATE(), 23000, 2);
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 38000, 5);
INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante en la tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES(NULL, 3, NULL, 'Victor', 'Lopez', 'Mecanico Jefe', CURDATE(), 50000, 2);
INSERT INTO vendedores VALUES(NULL, 4, NULL, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8);
INSERT INTO vendedores VALUES(NULL, 5, NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES(NULL, 6, NULL, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
INSERT INTO vendedores VALUES(NULL, 6, NULL, 'Luis', 'Lopez', 'Ayudante en la tienda', CURDATE(), 10000, 10);

-- CLIENTES 
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Jesus colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

-- ENCARGOS
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());

--  conculta multitabla
SELECT cantidad, nombre, modelo FROM encargos, clientes, coches WHERE encargos.cliente_id = clientes.id AND encargos.coche_id = coches.id;