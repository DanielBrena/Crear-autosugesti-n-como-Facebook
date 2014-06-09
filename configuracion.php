<?php 

class Conexion
{
	private $conexion;

	public function __construct($usuario,$contrasena){
		try{
			$this->conexion = new PDO("mysql:host=localhost;dbname=blogger",$usuario,$contrasena);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getConexion(){
		return $this->conexion;
	}


}

 ?>