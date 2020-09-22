<?php
/*
*   COOKIE: Fichero que se almacena en el ordenador del usuario que visita
*           la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web.
*/
//  CREAR COOKIE
//  Estrunctura:    setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio);

//  cookie basica
setcookie('micookie', 'valor de mi galleta');

//  cookie con expiración
setcookie('oneyear', 'Valor de mi cookie de 365 días', time()+(60*60*24*365)); //   seg*min*hr*diás
header('Location:ver_cookie.php');
?>
