<?php

$archivo = $_FILES['archivo'];
//  var_dump($archivo);
//  die();
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/git'){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header('Refresh: 5, URL=index.php');
    echo '<h1>Se subio la exitosamente</h1>';
}else{
    header('Refresh: 5, URL=index.php');
    echo '<h1>Sube una imagen con un formato correcto, por favor... </h1>';
}
/*
*    NOTA: Dependiendo del tamaño de los archivos debes configurar unas instrucciones en 
*    el archivo php.ini (upload_max_filesize; post_max_size; timezone(para que php procese el tiempo de acuerdo a tu region))
*/ 