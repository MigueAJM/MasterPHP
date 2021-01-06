<?php

class NotaController{
    public function listar(){
        //  Modelo
        require_once "models/nota.php";
        
        //  Logica de la acción del controlador
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola mundo PHP MVC0');
    
        //  Vista
        require_once 'views/notas/listar.php';
    }

    public function crear(){

    }

    public function borrar(){

    }
}