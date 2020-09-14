<?php
/*
*   FUNCIONES:  
*   Una funcion es un conjunto de instrucciones agrupadas bajo un nombre en
*   concreto y que pueden reutilizarse solamente invocando a la funcion tantas veces
*   como se requieran.

    function nombreMifuncion($parametro){
        code: instrucciones
    }
    nombreMiFuncion($mi_parametro);
*/

//  Ejemplo 1.
function muestraNombres(){
    echo 'Miguel Angel<br>';
    echo 'Miguel Angel<br>';
    echo 'Miguel Angel<br>';
    echo 'Miguel Angel<br>';
    echo '<hr>';
}
//  invocar function
muestraNombres();
/*
*   muestraNombres();
*   muestraNombres();
*/

//  Ejemplo 2.
function tabla($numero){
    echo '<h3>Tabla de multiplicar del numero '.$numero.'</h3>';
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br>";
    }
    //var_dump($numero);
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    tabla(2);
    tabla(5);
}else{
    echo 'Ingrese un numero en la URL';
}

for($i = 0; $i <= 10; $i++){
    tabla($i);
}

