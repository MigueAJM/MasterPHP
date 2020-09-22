<?php 
/* 
*   EJERCICIO 5. 
*   Crear un array con el contenido de la tabla: 
ACCION      AVENTURA        DEPORTES 
GTA        ASSASINS        FIFA 19 
COD        CRASH           PES  19 
PUGB       Prince of       MOTO GP 19 
            persia 
*   Cada fila debe de ir en un fichero separado(includes).
 */ 
$tabla = array(
    'ACCION' => array('GTA 5', 'Call of duty', 'PUBG'), 
    'AVENTURA' => array('Assasins Creed', 
    'Crash Bandicoot', 'Prince of persia'), 
    'DEPORTES' => array('Fifa 19', 'PES 19', 'Moto GP 19')
); 
//var_dump(array_keys($tabla)); 
$categorias = array_keys($tabla); 
?> 
<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primero.php'; ?>
    <?php require_once 'ejercicio5/segundo.php'; ?>
    <?php require_once 'ejercicio5/tercero.php'; ?>
</table>