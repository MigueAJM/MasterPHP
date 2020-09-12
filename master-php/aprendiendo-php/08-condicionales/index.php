<?php
/*
 *  CONDICIONALES
 *  IF:
 * if(condicion){
 *      instrucciones
 * }else{
 *      otras instricciones
 * }
 * 
 *  OPERADORES DE CONDICION
 *  == IGUAL
 *  === IDENTICO COMPARA que sea el mismo tipo de dato
 *  !=  diferente       <> diferente
 *  !== no identico
 *  < menor que
 *  > mayor que
 *  <= menor y igual que
 *  >= Mayor igual que
*/

$color = "rojo";
if($color == 'rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}

echo '<br>';

$year = 2021;
if($year != 2020){
    echo 'Es un año diferente a '.$year;
}else{
    echo 'Estamos en '.$year
}