<?php
/*
    Operadores aritmeticos
*/
$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1 + $numero2).'<br/>';
echo 'Resta: '.($numero1 - $numero2).'<br/>';
echo 'Multiplicación: '.($numero1 * $numero2).'<br/>';
echo 'División: '.($numero1 / $numero2).'<br/>';
echo 'Resto: '.($numero1 % $numero2).'<br/>';

//  Operadores de incremnto y decremento
$year = 2020;
//  incremento  $year = $year + 1;
$year++;
//  decremento $year = $year - 1;
$year--;
// pre-decremento   $year = 1 - $year;
--$year;
//pre-incremento $year = 1 + $year;
echo "<h1>$year</h1>";
?>