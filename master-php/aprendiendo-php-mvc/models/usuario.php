<?php 

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    function setEmail($enail){
        $this->email = $email;
    }

    function setPassword($password){
        $this->password = $password;
    }

    public function conseguirTodos(){
        return "Obteniendo todos los usuarios";
    }
}