<?php
//  Controlador encapsula acciones
class UsuarioController{
    public function mostrarTodos(){
       /*
       ya no es necesario indicar que esta un directorio atras, debido a que desde el index.php lo indicamos
        require_once '../models/usuario.php';
        */
        require_once 'models/usuario.php';
        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos();
        //require_once '../views/usuarios/mostrar-todos.php';
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once "views/usuarios/crear.php";
    }
}