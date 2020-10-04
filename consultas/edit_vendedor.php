<?php require '../config/conexion.php';

// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario -> modals/modal_edit_user.php
$id_vendedor = $_POST['id_vendedor'];
$nombre = $_POST['nombre'];

// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo producto en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE vendedores
		SET nombre = '$nombre'
		WHERE id_vendedor = '$id_vendedor'
		");

	$statement->execute();
	header("Location: ../usuarios");
}


?>