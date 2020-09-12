<?php
/*
  *  Bucle WHILE
  *  Estructura de control de que itera
  *  orepite la ejecucion de una serie de instrucciones
  *  tantas veces como sea necesario,
  *  en base a una condicion
  * 
    while(condicion){
        bloque de instrucciones
    }
*/
$numero = 0;
/*
while($numero <= 100){
    echo '<p>'.$numero.'</p>';
    $numero++;
}
*/
while($numero <= 100){
    echo $numero;
    if($numero != 100) echo ', ';
    $numero++;
}

//  Ejemplo
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

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador).'<br>';
    $contador++;
}