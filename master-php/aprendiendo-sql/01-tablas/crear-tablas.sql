/*
    int(n° caracteres) ENTERO
    integer(n° caracteres) ENTERO (max: 4294967295)
    varchar(n° caracteres) STRING/ ALFANUMERICO (max: 255)
    char(n° caracteres) STRING/ ALFANUMERICO
    float(n° cifras, n° decimales)  DECIMAL/ COMA FLotante
    date, time, timestamp

    --- STRING MÁS GRNADES ---
    TEXT    65535 caracteres
    MEDIUMTEXT  16 millones de caracteres
    LONGTEXT    4 billones de caracteres

    --- ENTEROS MÁS GRANDES ---
    MEDIUMINT
    BIGINT
*/

/*
      CREAR TABLAS
*/
CREATE TABLE usuarios(
    id             INT(11) AUTO_INCREMENT NOT NULL,
    nombre         VARCHAR(100) NOT NULL,
    apellidos      VARCHAR(255) DEFAULT  'HOLA QUE TAL',
    email          VARCHAR(100) NOT NULL,
    password       VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
SHOW tables;
DESC usuarios;      /* Describe la tabla indicada */
 
/*
  Eliminar tablas  
*/
DROP TABLE usuarios;