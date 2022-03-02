<?php 
require '../config/conexion.php';


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_orden = $_POST['id_orden'];
$senia = $_POST['senia'];
$total = $_POST['total'];
$saldo_final = $total - $senia;
// --------------------------------- //
// --------------------------------- //
// Edito el la categoia en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE ordenes
		SET senia = '$senia',
		saldo = '$saldo_final'
		WHERE id = '$id_orden'
		");

	$statement->execute();
}