<?php
/*
    TIPOS DE DATOS
    Entero ( int/integer) = 99
    Coma flotante / decimales (float/double) = 3.45
    Cadenas (string) = "Hola yo soy un string"
    Boleano (bool) =  true/false
    null    (no lleva contenido dentro)
    array   (coleccion de datos)
    Objetos 
*/
$numero = 100;
$decimal = 27.90;
$texto = "Soy texto \" $numero"; //comilla doble es mas lento a nivel de procesamiento
//$texto = 'Soy texto'. $numero; 

$verdadero = true;
$nula = null;
echo gettype($nula);
echo $texto;
//  Debugear
echo '<br/>';
$mi_nombre[] = "Miguel Angel";
$mi_nombre[] = "Miguel Angel";

var_dump($mi_nombre);