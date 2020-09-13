<?php
/*
*   Ejercicio 4.    Recoger dos numero s por la url(parametros GET) y hacer todas las operaciones
*   basicas de la calculadora(suma, resta, division, multiplicacion y resto)
*/
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo '<h1>Calculadora</h1><br>Suma: '.($numero1+$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'Multiplicación: '.($numero1*$numero2).'<br>';
    echo 'División: '.($numero1/$numero2).'<br>';
    echo 'Resto: '.($numero1%$numero2).'<br>';
}else{
    echo '<h3>Introduce correctamente los valores por la URL</h3>';
}

