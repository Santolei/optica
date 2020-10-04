<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_producto = $_POST['id_producto'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$material = $_POST['material'];
// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo producto en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE productos
		SET 
			codigo = '$codigo',
			nombre = '$nombre',
			categoria = '$categoria',
			material = '$material'
		WHERE id_producto = '$id_producto'
		");

	$statement->execute();
	header("Location: ../inventario");
}

		

		
?>