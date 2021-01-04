<?php
require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    public $nombre;
    public $contenido;

    function getNombre(){
        return $this->nombre;
    }

    function getContenido(){
        return $this->contenido;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setContenido($contenido){
        $this->contenido = $contenido;
    }
}