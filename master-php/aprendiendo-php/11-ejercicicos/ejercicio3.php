<?php
/*
*   Ejercicio 3.    Escribir un script que imprma por pantalla los cuadrados
*   (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
*   PD: Urilizar bucle while.
*/
$contador = 0;
while($contador <= 40){
    $cuadrado =($contador*$contador);
//    echo "El cuadro de $contador es: $cuadrado<br>";
    $contador++;
}
for($contador = 0; $contador <= 40; $contador++){
    $cuadrado =($contador*$contador);
    echo "El cuadro de $contador es: $cuadrado<br>";
} 
