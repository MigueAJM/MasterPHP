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
 * 
 *  OPERADORES LOGICOS
 *  && AND Y
 *  ||  OR  O
 *  ! NOT NO
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
$ciudad = 'C. Mexico';
$continete = 'America';
$edad = 23;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo '<h1>'.$nombre.' es mayor de edad</h1>';

    if($continete == 'America'){ // esto es un if anidado
        echo '<h2>Es de '.$ciudad.'</h2>';
    }else{
        echo 'No es de '.$continete;
    }
}else{
    echo '<h2>'.$nombre.' no es mayor de edad</h2>';
}
echo '<br>';
//  Ejemplo 4
$dia = 3;
if($dia == 1){
    echo 'Es Lunes';
}elseif($dia == 2){
    echo 'Es Martes';
}elseif($dia == 3){
    echo "Es Miercoles";
}elseif($dia == 5){
    echo 'Es Viernes';
}else{
    echo 'Es fin de semana';
}
echo '<br>';
//  Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Esta en edad de trabajar';
}else{
    echo 'No puede trabahar';
}

$pais = 'Mexico';
if($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia'){
    echo 'En este pais se habla español';
}else{
    echo 'En este pais no se habla español';
}