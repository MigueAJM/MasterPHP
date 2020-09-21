<?php
/*
*   ARRAYS
*   Un array es una coleccion o un conjunto de datos, bajo un unico nombre y para acceder a esos valores
*   podemos usar un indice numero o alfanumerico
*/

    $pelicula = "Batman";
    $peliculas = array('Batman', 'Spiderman', 'Superman');
    $cantantes = ['Drake Bell', 'Kurt', 'Drake'];
    var_dump($peliculas);
    echo '<br>';
    var_dump($peliculas[2]);
    echo '<br>';
    var_dump($cantantes);
    echo '<hr>';
    echo $peliculas[0].'<br>';
    echo $cantantes[2];
?>