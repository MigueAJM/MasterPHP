<?php
/*
*   ARRAYS
*   Un array es una coleccion o un conjunto de datos, bajo un unico nombre y para acceder a esos valores
*   podemos usar un indice numero o alfanumerico
*/

    $pelicula = "Batman";
    $peliculas = array('Batman', 'Spiderman', 'Superman');
    $cantantes = ['Drake Bell', 'Kurt', 'Drake'];
//  ARRAY ASOCIATIVO
    //  indices alfanumericos => Array asociativo
    $personas = array(
        'nombre' => 'Miguel',
        'apellidos' => 'Jimenez',
        'web' => 'victorroblesweb.es'
    );
    var_dump($personas);
    echo '<hr>';
    var_dump($personas['apellidos']);
    echo '<hr>';


    var_dump($peliculas);
    echo '<br>';
    var_dump($peliculas[2]);
    echo '<br>';
    var_dump($cantantes);
    echo '<hr>';
    echo $peliculas[0].'<br>';
    echo $cantantes[2].'<hr>';

//  Recorrer con FOR
echo '<h2>Listado de peliculas</h2>';
echo '<ul>';
for($i = 0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

//  Recorrer con FOREACH
echo '<h2>Listado de cantantes</h2>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';
?>