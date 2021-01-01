<?php
/*
    Exepciones

    try and catch : capturar exepciones, en codigo suceptible a errores
*/

try{
    if(isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    } else{
        throw new Exception('Faltan parametros por la url');
    }
} catch(Exception $e){
    echo "Hay errores de logica: ".$e->getMessage();
} finally { // ejecuta instrucciones al terminar de evaluar todo el try and catch
    echo '<br/>Todo correcto';
}
