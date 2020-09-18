<?php
//  Debugear
$nombre = 'Miguel';
var_dump($nombre);

//  Fechas
echo '<br>'.date('d-m-y').'<br>';
echo time().'<hr>';

//  Matematicas
echo 'Raiz cuadrada de 10: '.sqrt(10).'<br>';
echo 'Numero aleatorio entre 10 y 40: '.rand(10, 40).'<br>';
echo 'Numero pi: '.pi().'<br>'; 
echo 'Redondear: '.round(7.891234, 2).'<hr>';

//  MÄS FUNCIONES GENERALES
gettype($nombre);
//  DETECTAR TIPADO
if(is_string($nombre)) echo 'Es un String<br>';
else echo 'No es string';
echo '<br>';
/*  
*   ISSET
*   comprobamos si una variable existe dentro de nuestro script
*/
//  Comprobar si existe una variable
if(isset($nombre)){
    echo 'La variable existe';
}else{
    echo 'La variable no existe';
}
echo '<br>';
//  limpiar espacios
$frase = '    mi contenido    ';
var_dump(trim($frase));

//  eliminar variables / indices
$year = 2020;
unset($year); //    elimina la variable
var_dump($year);
echo '<hr>';
//  comprobar variables vacias
$texto = "   HELLO    ";
if(empty(trim($texto))){
    echo 'La variable texto esta vacia';
}else echo 'La variable texto TIENE Contenido';
echo '<hr>';
//  Contar caracteres de un string
$cadena = 'cinco';
echo strlen($cadena);
echo '<hr>';
//  Encontar caracter
$frase = 'La vida es bella';
echo strpos($frase, 'i');
echo '<hr>';
//  Remplazar palabras de un String
$frase = str_replace('vida', 'moto', $frase);
echo $frase;
echo '<hr>';
//  Convertir a mayusculas y minusculas
echo strtolower($frase).'<br>'; // minuscula
echo strtoupper($frase); // Mayuscula