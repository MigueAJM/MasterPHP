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
//  Ejemplo 1
$color = "rojo";
if($color == 'rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}

echo '<br>';
//Ejemplo 2
$year = 2021;
if($year != 2020){
    echo 'Es un año diferente a '.$year;
}else{
    echo 'Estamos en '.$year;
}

//  Ejemplo 3
echo '<br>';

$nombre = "Miguel";
$ciudad = 'Mexico';
$continete = 'America';
$edad = 23;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo '<h1>'.$nombre.' es mayor de edad</h1>';

    if($continete == 'America'){
        echo '<h2>Es de '.$ciudad.'</h2>';
    }else{
        echo 'No es de '.$continete;
    }
}else{
    echo '<h2>'.$nombre.' no es mayor de edad</h2>';
}