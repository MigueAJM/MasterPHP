<?php
/*
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/

require_once 'autoload.php';
/*
$usuario = new Usuario();
echo $usuario->nombre;
echo '<br/>' . $usuario->email;

$categoria = new Categoria();
echo '<br/>' . $categoria->nombre;

$entrada = new Entrada();
echo '<br/>' . $entrada->titulo;
*/

//  NAMESPACES Y PAQUETES
//  use MisClases\Usuario, MisClases\Categoria(), MisClases\Entrada;
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
//  se utiliza un alias para evitar errores con la clase de mi paquete (MisClases)
use PanelAdministrador\Usuario as UsuarioAdmin;
class Main{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
 /*
        $this->usuario = new MisClases\Usuario();
        $this->categoria = new MisClases\Categoria();
        $this->entrada = new MisClases\Entrada();
*/
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();

    }
}
$main =  new main();
var_dump($main->usuario);

$usuario = new UsuarioAdmin();
var_dump($usuario);