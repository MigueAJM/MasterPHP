<?php
/*
*   SESION: Almacenar y persistir datos del usuario mientras navega en un sitio web, 
*   hasta que cierra siesión o cierra el navegador.
*/
//  Iniciar sesión
session_start();
//   variable local
$variable_normal = 'Soy una cedena de texto';
//  variable de sesión
$_SESSION['variable_persistente'] = 'HOLA SOY UNA SESIÓN ACTIVA';

echo $variable_normal.'<br/>';
echo $_SESSION['variable_persistente'];
?>