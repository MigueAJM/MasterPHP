<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = 'Angel';
        $this->email = 'angel@angel.com';
    }
}