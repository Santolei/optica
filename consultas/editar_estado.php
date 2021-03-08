<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_orden = $_POST['id_orden'];
$estado = $_POST['estado'];
// --------------------------------- //
// --------------------------------- //
// Edito el la categoia en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE ordenes
		SET estado = '$estado'
		WHERE id = '$id_orden'
		");

	$statement->execute();
	header("Location: ../index");
}