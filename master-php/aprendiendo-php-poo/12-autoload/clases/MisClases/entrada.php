<?php
namespace MisClases;

class Entrada{
    public $titulo;
    public $fecha;

    public function __construct(){
        $this->titulo = 'Review del GTA5';
        $this->fecha = '1 de enero de 2021';
    }
}