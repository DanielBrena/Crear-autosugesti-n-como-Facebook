<?php 
include("configuracion.php");
if($_GET){

	$query = $_GET["query"];

	$conexion = new Conexion("root","danielbrena2");

	$usuarios = $conexion->getConexion();

	$mostrarUsuarios = $usuarios->prepare("SELECT * FROM usuario WHERE (nombre LIKE :query OR
											apellidoPaterno LIKE :query ) OR
											  (CONCAT(nombre,' ',apellidoPaterno) LIKE :query )
											ORDER BY id");

	$mostrarUsuarios->bindValue(":query","%".$query."%",PDO::PARAM_STR);
	$mostrarUsuarios->execute();
	if($mostrarUsuarios->rowCount() > 0){
		$lista = $mostrarUsuarios->fetchAll(PDO::FETCH_OBJ);
		echo json_encode($lista);
	}
	
}


 ?>