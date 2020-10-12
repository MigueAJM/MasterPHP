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