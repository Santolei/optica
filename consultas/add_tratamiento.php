<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //

require '../config/conexion.php';

// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo producto en la BD

$nombre = $_POST['nombre_tratamiento'];

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		INSERT INTO tratamientos(titulo) 
		VALUES('$nombre')
		");

	$statement->execute();
	// header("Location: ../categorias");
}

		

		
?>