<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_categoria = $_POST['id_categoria'];
$nombre = $_POST['nombre_categoria'];
// --------------------------------- //
// --------------------------------- //
// Edito el la categoia en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE categorias
		SET nombre = '$nombre'
		WHERE id_categoria = '$id_categoria'
		");

	$statement->execute();
	header("Location: ../categorias");
}