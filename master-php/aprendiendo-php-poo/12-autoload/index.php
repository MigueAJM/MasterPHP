<?php
/*
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/

require_once 'autoload.php';
$usuario = new Usuario();
echo $usuario->nombre;
echo '<br/>' . $usuario->email;

$categoria = new Categoria();
echo '<br/>' . $categoria->nombre;

$entrada = new Entrada();
echo '<br/>' . $entrada->titulo;