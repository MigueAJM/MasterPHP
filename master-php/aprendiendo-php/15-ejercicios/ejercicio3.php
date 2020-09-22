<?php
/*
*   EJERICICO 3.
*   Script que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en miniscula
*   y mostrarlo en mayusculas y en negritas. 
*/
$texto = '';
if(empty($texto)){
    $texto = 'hola yo soy el relleno de la variable texto';
    $textoUpper = strtoupper($texto);
    echo '<strong>'.$textoUpper.'</strong>';
}else{
    echo 'La variable tiene el siguiente contenido '.$texto;
}
?>