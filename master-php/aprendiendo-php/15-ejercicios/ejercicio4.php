<?php
/*
*   EJERCICIO 4.
*   Crear un script que tenga 4 variables, una de tipo array, otra tipo string, otra int y una más booleana
*   y que imprima en pantalla el tipo de variable que sea.
*/
$matriz = array('hola mundo', 55);
$titulo = 'Master en PHP';
$numero = 55;
$verdadero = true;

if(is_array($matriz)){  
    echo '<h1>El array  es un array</h1>';
}

if(is_string($titulo)){
    echo '<h1>'.$titulo.'</h1>';
}

if(is_integer($numero)){
    echo '<h1>'.$numero.'</h1>';
}

if(is_bool($verdadero)){
    echo '<h1>La variable es verdadero</h1>';
}
?>