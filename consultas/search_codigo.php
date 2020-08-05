<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //

require '../config/conexion.php';

// --------------------------------- //
// --------------------------------- //


//Recogemos la cadena
$busqueda=$_POST['cadena'];

if (!$con) {
	echo 'Fallo la conexion';
} else {
	if (isset($busqueda) and $busqueda != "") {
		$statement = $con->prepare("SELECT * FROM productos WHERE codigo = $busqueda");
		$statement->execute();
		$resultado = $statement->fetchAll();
		
		foreach($resultado as $producto){
			$nombre_producto = $producto['nombre'];

			echo ("<strong class='mb-1'>¡Ese código ya está en uso!</strong> <strong class='bold-text alert alert-danger'>$nombre_producto</strong>
				");
		}


	} 
}



?>