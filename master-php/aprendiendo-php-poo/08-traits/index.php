<?php
//	TRAITS:	Nos permite definir una serie de metodos para compartir en diferentes clases.
trait Utilidades{
	public function mostrarNombre(){
		echo "<h1>El nombre es ".$this->nombre."</h1>";
	}
}

class Coche{
	public $nombre;
	public $marca;
	
	use Utilidades;
}

class Persona{
	public $nombre;
	public $apellidos;
	
	use Utilidades;
}

class VideoJuego{
	public $nombre;
	public $anio;
	
	use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Antonio Machado";
$persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = "GTA 4";
$videojuego->mostrarNombre();


