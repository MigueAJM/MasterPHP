<?php
/*
*   Ejercicio 5.    Hacer un script que muestre todos los numeros entre dos numeros
*   que nos lleguen por la URL($_GET)
*
*   NOTA => isset — Determine if a variable is declared and is different than NULL
*/
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1 < $numero2){
        for($i = $numero1; $i <= $numero2; $i++){
            echo '<h4>'.$i.'</h4>';
        }
    }else{
        echo 'El numero 1 debe ser menor al numero 2';
    }
}else{
    echo '<h3>Los parametros get no eisten</h3>';
}
