<?php
/*
  *  Bucle WHILE
  *  Estructura de control de que itera
  *  orepite la ejecucion de una serie de instrucciones
  *  tantas veces como sea necesario,
  *  en base a una condicion
  * 
    while(condicion){
        bloque de instrucciones
    }
*/
$numero = 0;
/*
while($numero <= 100){
    echo '<p>'.$numero.'</p>';
    $numero++;
}
*/
while($numero <= 100){
    echo $numero;
    if($numero != 100) echo ', ';
    $numero++;
}