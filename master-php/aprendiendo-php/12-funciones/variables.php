<?php
/*
*   VARIABLES LOCALES:
*       Son las que se definen dentro de un función y no pueden ser
*       usadas fuera de la función, solo estan disponibles dentro. A no ser que 
*       hagamos un return.
*   VARIABLES GLOBALES:
*       Son las que se declaran fuera de una función y estan disponibles 
*       dentro y fuera de las fuciones.
*/
$frase = 'Ni los genios son tan genios y no los medicres tan mediocres';

echo $frase;

function holaMundo(){
/*
*   Para poder usar la variable Global es necesario utilizar "global", de lo contrario nos retornara un UNDEFINED
*/
    global $frase;
    echo '<h1>'.$frase.'</h1>';

    $year = 2020;
    echo '<h1>'.$year.'</h1>';
    return $year;
}

echo $year; //  Solo esta dentro del ambito de la función, la unica forma de usar la variable, con un return, aqui retorna UNDEFINED
echo holaMundo();