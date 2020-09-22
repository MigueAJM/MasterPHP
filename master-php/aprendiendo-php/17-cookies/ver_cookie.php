<?php
/*
*   Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal
*   Array asociativo
*/

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe la cookie';
}
if(isset($_COOKIE['oneyear'])){
    echo '<h1>'.$_COOKIE['oneyear'].'</h1>';
}else{
    echo 'No existe la cookie';
}
?>
<a href="eliminar_cookie.php">Borrar galletas</a>
<a href="crear_cookies.php">Crear cookies</a>