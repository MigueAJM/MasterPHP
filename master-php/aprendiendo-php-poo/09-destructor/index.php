<?php
//	__desctruct: Nos permite detectar cuando un objeto dejara de utilizarse
class Usuario{
	public $nombre;
	public $email;
	
	public function __construct() {
		$this->nombre = "Víctor Robles";
		$this->email = "victor@victor.com";
		
		echo "Creando el objeto <br/>";
	}
	// __toString: Nos permite controlar un objeto cuando lo tratamos como un string
	public function __toString() {
		//Interpolación de variables:	return "Hola, {$this->nombre} 
		return "Hola, {$this->nombre}, estas registrado con {$this->email}";
	}
	
	public function __destruct() {
		echo "<br/> Destruyendo el objeto";
	}
}

$usuario = new Usuario();
echo $usuario;

