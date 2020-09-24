<?php
/*
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
*/
//  Copiar fichero
//  copy('fichero_texto.txt', 'fichero_copiado.txt') or die('error al copiar');

//  Renombrar
//rename('fichero_copiado.txt', 'archivo_rename.txt');

//  Eliminar 
//unlink('archivo_rename.txt') or die('Error al borrar');

if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'No existe';
}