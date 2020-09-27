<?php
/*
    EJERCICIO 1.
    Crear una sesión que aumente su valor en uno o dismunuya en uno
    en función de si el parametro get counter esta a uno o a cero
*/

session_start();

if(isset($_SESSION['numero'])){
    $_SESSIO['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}else{
    $_SESSION['numero']--;

}
?>

<h1>El valor de la sesión numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuair el valor</a>