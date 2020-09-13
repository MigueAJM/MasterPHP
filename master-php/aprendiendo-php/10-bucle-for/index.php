<?php

/*
*   BUCLE FOR
*   for(variable contador, condicion, actualizando contador){
*       //bloque de instrucciones
*    }
*/

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    //$resultado = $resultado + $i;
    $resultado += $i;
}
echo '<h1>El resultado es: '.$resultado.'</h1>';

//  Ejemplo tabla de multiplicar
echo '<hr>';
if(isset($_GET['numero'])){ //  isset comprueba si existe una variable o no, o si existe un dato o no
    //pasamos de string a int =>    casteo
    $numero = (int)$_GET['numero']; //(int)$_GET['numero'] esto se conoce como casting de datos 
}else{
    $numero = 1;
}
/*
*   NOTA:   cuando se reciben datos por la url
*   son de tupo string
*/
var_dump($numero); 

echo '<h1>Tabla de multiplicar del numero'.$numero.'</h1>';

for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador).'<br>';
}