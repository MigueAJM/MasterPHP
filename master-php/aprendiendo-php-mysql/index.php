<?php
//  CONECTAR A LA BASE DE DATOS
$conexion = mysqli_connect('localhost', 'miguelajm', 'holamundo', 'phpmysql');

//  COMPRBAR SI LA CONEXION ES CORRECTA
if(mysqli_connect_error()){
    echo 'Laconexión a la base de datos mysql ha falllado; '. mysqli_connect_error();
}else{
    echo 'Conexión realizada correctamente!!';
}

//  CONSULTA PARA CONFIGURAR LA CODIFICACION DE CARCTERES
mysqli_query($conexion, "SET NAMES 'UTF8'"); //SI LA CONEXION RETORNA ALGUNA TILDE, UNA Ñ, LO SAQUE CORRECTAMENTE
echo '<hr/>';

//CONSULTA SELECT DESDE PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");
/*
$notas = mysqli_fetch_assoc($query); // solo me retorna un registro
var_dump($notas);
echo '<hr/>';
*/
//Aqui me retorna cada registro en un array asociativo
while($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h3>'.$nota['titulo'].'</h3>';
    echo $nota['descripcion'].'<br/>';
}
echo '<hr/>';
//  INSERTAR EN LA BASE DE DATOS DESDE PHP
$sql = "INSERT INTO notas VALUES(NULL, 'Nota desde PHP', 'Esta es una nota desde PHP', 'Green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo 'DATOS INSERTADOS CORRECTANENTE';
}else{
    echo 'Error: '.mysqli_error($conexion);
}

