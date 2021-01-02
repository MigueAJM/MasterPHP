<?php 
//por buenas practicas se recomienda nombrar asi la function
function app_autoloader($class){
    require_once 'clases/' . $class .'.php';
}

//  este metodo hace una busqueda de las clases en base a mi function app_autoloader
spl_autoload_register('app_autoloader');