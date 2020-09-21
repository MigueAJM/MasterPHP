<?php
$cantantes = ['Drake Bell', 'Drake', 'Alfredo', 'C-kan'];
$numeros = [1, 6, 3, 4,10, 2, 445];
/*
*   ORDENAR
*/
//  asort =>    Ordena alfabeticamente el array
asort($cantantes);
//  arsort => Ordena alfabetico inverso
arsort($cantantes);
//  sort => Ordena de igual manera, pero tambien numericamente
sort($cantantes);
sort($numeros);
var_dump($numeros);
echo '<br>';
var_dump($cantantes);
echo '<hr>';

//  Añadir elementos al array
$cantantes[] = 'Davo';

array_push($cantantes, 'Waor');
//  Eliminar elemento del array
array_pop($cantantes); // elimina el ultimo indice
unset($cantantes[2]);

//  retornar un elemento aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
var_dump($cantantes);
//  Dar la vuelta a un array  NOTA => almacenar el valor en una variable
var_dump(array_reverse($numeros));

//  Buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

//  contar numeros de elementos

echo '<br>'.count($cantantes);
echo '<br>';
echo sizeof($cantantes);