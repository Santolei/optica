<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_patologia = $_POST['id_patologia'];
$nombre = $_POST['nombre_patologia'];
// --------------------------------- //
// --------------------------------- //
// Edito el la categoia en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE patologias
		SET titulo = '$nombre'
		WHERE id_patologia = '$id_patologia'
		");

	$statement->execute();
	header("Location: ../patologias");
}