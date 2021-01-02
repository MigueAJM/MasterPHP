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
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }

    public function getEntrada(){
        return $thuis->entrada;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }
}
//  Objeto principal

//  Comprobar que metodos existen 
$main =  new main();
//var_dump($main->usuario);
$metodos = (get_class_methods($main));

$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);
// Objeto otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);

//  Comprobar si existe una clase
// al colocar una arroba no me mustra los warning

//  $clase = @class_exists('MisClases\Usuario2');
$clase = class_exists('MisClases\Usuario');

if($clase){
    echo '<h1>La clase si existe</h1>';
}else{
    echo '<h1>La clase No existe</h1>';
}