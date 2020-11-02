<?php
class Coche{
	
	// Atributos o propiedades (variables)

	// PUBLIC: Podemos acceder desde cualquier lugar, dentro de clase actual
	//         dentro de clases que hereden esta clase o fuera de la clase
	public $color;
	
	// PROTECTED: Podemos accedes desde la clase que los define y desde clases
	// que hereden esta clase
	protected $marca;
	
	// PRIVATE: unicamente se puede acceder desde esta clase
	private $modelo;
	
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
	
	public function getModelo(){
		return $this->modelo;
	}
	
	public function setMarca($marca){
		$this->marca = $marca;
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

	public function mostrarInformacion(Coche $miObjecto){ //Indicamos que el parametro es de tipo coche
		if(is_object($miObjecto)){
			$informacion = '<h1>Información del coche</h1>';
			$informacion .= 'Color: '.$miObjecto->color;
			$informacion .= '<br/>Modelo: '.$miObjecto->color;
			$informacion .= '<br/>Velocidad: '.$miObjecto->color;
		}else{
			$informacion = "Tu dato es: $miObjecto";
		}
		return $informacion;
	}
	
} // fin definicion de la clase
