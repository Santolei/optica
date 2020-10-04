<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //

require '../config/conexion.php';

// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_vendedor = $_GET['id'];

// --------------------------------- //
// --------------------------------- //
// Borro el producto de la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		DELETE FROM vendedores
		WHERE id_vendedor = '$id_vendedor'
		LIMIT 1
		");

	$statement->execute();
	header("Location: ../usuarios");
}		
?>