<?php
/*
    Constante
    Es un contenedor de informacion que no puede variar
*/

define('nombre', 'Miguel Angel');
echo '<h1>'.nombre.'</h1>';

//  Constantes predefinidas

echo PHP_OS;
echo PHP_VERSION;
echo __LINE__;
echo __FILE__;
function holaMundo(){
    echo __FUNCTION__;    
}
holaMundo();
?>