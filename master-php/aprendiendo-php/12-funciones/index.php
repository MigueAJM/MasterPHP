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
/*
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
*/
//  Ejemplo 3.

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multi = $numero1*$numero2;
    $division = $numero1/$numero2;

    if($negrita){
        echo '<h1>';
    }
    echo 'Suma: '.$suma.'<br>';
    echo 'Resta: '.$resta.'<br>';
    echo 'Multiplicacion: '.$multi.'<br>';
    echo 'Division: '.$division.'<br>';
    echo '<hr>';
    if($negrita){
        echo '</h1>';
    }
}

calculadora(10,34);
calculadora(2,5,true);  // el terer parametro puede ser opcional, debido a que se le asigna un valor por defecto.
/*  NOTA: Los ecos en las funciones no son una buena practica, las funciones deben retornar algun valor. */