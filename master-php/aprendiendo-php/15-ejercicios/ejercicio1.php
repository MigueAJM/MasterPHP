<?php
/*
*   EJERCICIO 1.
*   Hacer un script que tenga un array con 8 numeros enteros
*   Que haga lo siguiente:
*   1 recorrerlo y mostrarlo
*   2 Ordenarlo y mostrarlo
*   3 Mostrar su longitud
*   4 Buscar algun elemento (buscar por el parametro que llegue por la url)
*/
//  FUNCIONES
function mostrarArray($numeros){
    $resultado = '';
    foreach ($numeros as $numero ) {
        $resultado.=$numero.'<br/>';
    }
    return $resultado;
}

$numeros = array(12,1,23,80,123,6,4,5);
//  Recorrer y mostrar
echo '<h1>Recorrer y mostrar</h1>';
echo mostrarArray($numeros);
echo '<hr/>';
//  Ordenar y mostrar
sort($numeros);
echo mostrarArray($numeros);
echo '<hr/>';
//  Mostrar longitud
echo '<h1>Numero total de elementos</h1>';
echo count($numeros);
//  Busqueda en el array
if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
    echo '<h1>Buscar en el array el numero: '.$busqueda.'</h1>';
    $search = array_search($busqueda, $numeros);
    //var_dump($search);
    if(!empty($search)){
        echo '<h4>El numero buscado existe en array, en el indice: '.$search.'</h4>';
    }else{
        echo 'No existe el numero buscado';
    }
}
?>