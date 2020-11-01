<?php
class Coche{
	
	// Atributos o propiedades (variables)
	public $color;
	public $marca;
	public $modelo;
	public $velocidad;
	public $caballaje;
	public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
	// Métodos, son acciones que hace el objeto (antes funciones)
	public function getColor(){
		// Busca en esta clase la propiedad X
		return $this->color;
	}
	
	public function setColor($color){
		$this->color = $color;
	}
	
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	
	public function acelerar(){
		$this->velocidad++;
	}
	
	public function frenar(){
		$this->velocidad--;
	}
	
	public function getVelocidad(){
		return $this->velocidad;
	}
	
} // fin definicion de la clase
