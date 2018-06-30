<?php

class Usuario{
	// Nombre de usuario
	private $nombre;
	// Contraseña del usuario
	private $contrasenia;
    
    /**
    * Constructor que sirve para crear usuarios
    * @param 
    */
	public function __construct(string $n , string $c){
		$this->nombre = $n;
		$this->contrasenia = $c;
	}
	// Obtiene el nombre del Usuario
	public function  getNombre(){
		return $this->nombre;
	}
	// Obtiene la contraseña del usuario
	public function getContrasenia(){
		return $this->contrasenia;
	}
	// Para poder editar la contraseña
	public function setContrasenia(string $nueva){
		$this->contrasenia = $nueva;
	}
}

// Para obtener 
public function ejemplo(){
	$u = new Usuario("Juan", "1234");
	$u->getNombre();
}

