/*
    SUBCONSULTAS
    Son consultas que se ejecutan dentro de otras.
    Consiste en utilizar los resultados de la suconsulta para 
    operar en l consulta principal

*/
-- SACAR USUARIOS CON ENTRADAS
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

/*
    CLAUSULA  " IN ""
    Esta clusala se usa solo cuendo la subconsulta 
    nos retornara mas de un resulta,
    en caso de que solo nos retorne un valor se utilizara el igual" = "
*/
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

-- SACAR  LOS USUARIOS QUE TENGAN UNA ENTRADA QUE EN SUS TITULOS HABLEN DE GTA
SELECT nombre, apellidos FROM usuarios WHERE id 
    IN(SELECT usuario_id  FROM entradas WHERE titulo LIKE '%GTA%');

-- SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIANDO SU NOMBRE
SELECT  categoria_id, stitulo FROM entradas WHERE categoria_id
    IN(SELECT id FROM categorias WHERE nombre = 'Acción');
-- MOSTRAR LAS CAREGORIAS CON MAS DE 3 ENTRADAS

-- MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN  MIERCOLES

-- MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS

-- MOSTRAR LAS CATEGORIAS SIN ENTRADAS