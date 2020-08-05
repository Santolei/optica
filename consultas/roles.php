<?php 
	// Voy a traer los datos de la tabla roles

	$statement = $con->prepare ('
		SELECT * FROM roles 
		ORDER BY id
		');
	$statement->execute();
	$roles = $statement->fetchAll();

	// --------------------------------- //
	// --------------------------------- //
	// funcion para cambiar los roles de numero al nombre del rol
	function roles($rol){
		switch ($rol){ 
			case 1: $rol = "Administrador"; break; 
			case 2: $rol = "Empleado"; break; 
			case 3: $rol = "Cajero"; break;
			
		}
		return $rol;
	}
	
 ?>