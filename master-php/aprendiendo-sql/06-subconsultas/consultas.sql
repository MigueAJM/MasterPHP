/*
    SUBCONSULTAS
    Son consultas que se ejecutan dentro de otras.
    Consiste en utilizar los resultados de la suconsulta para 
    operar en l consulta principal

*/

SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

/*
    CLAUSULA  " IN ""
    Esta clusala se usa solo cuendo la subconsulta 
    nos retornara mas de un resulta,
    en caso de que solo nos retorne un valor se utilizara el igual" = "
*/
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);