<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_tratamiento = $_POST['id_tratamiento'];
$nombre = $_POST['nombre_tratamiento'];
// --------------------------------- //
// --------------------------------- //
// Edito el la categoia en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE tratamientos
		SET titulo = '$nombre'
		WHERE id_tratamiento = '$id_tratamiento'
		");

	$statement->execute();
	header("Location: ../tratamientos");
}