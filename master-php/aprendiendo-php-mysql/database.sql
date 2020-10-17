CREATE DATABASE IF NOT EXISTS phpmysql;
USE phpmysql;

CREATE TABLE notas(
id INT(255) AUTO_INCREMENT NOT NULL,
titutlo VARCHAR(255),
descripcion MEDIUMTEXT,
color VARCHAR(255),
CONSTRAINT pk_notas PRIMARY KEY(id)
)ENGINE=InnoDB;


INSERT INTO notas VALUES(NULL, 'Nota 1', 'Completar los ejercicios de SQL', 'red');
INSERT INTO notas VALUES(NULL, 'Aprendiendo PHP', 'Master en PHP de Victor Robles', 'yellow');