<?php
//  Abrir archivo
$archivo = fopen('fichero_texto.txt', 'a+'); // a+: Leer y escribir

//  Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido.'<br/>';
}

//  Escribir
fwrite($archivo, 'texto introducido desde PHP');

//  Cerrar archivo
fclose($archivo);