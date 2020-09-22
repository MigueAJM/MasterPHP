<?php
/*
*   EJERCICIO 2.
*   Escribir un script que añada valores a un array mientras que su
*   longitud sea menor a 120 y luego mostrarlos por pantalla.
*/
    $coleccion = array();
    for($i = 0; $i < 120; $i++){
        array_push($coleccion, 'elemento-'.$i);
    }
    var_dump($coleccion);
?>