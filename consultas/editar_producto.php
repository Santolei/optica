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
$marca = $_POST['marca'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$valor_dolar = $_POST['valor_dolar'];
$costo_usd = $_POST['costo_usd'];
$ganancia = $_POST['ganancia'];
$precio = $_POST['precio'];
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
			marca = '$marca',
			stock = '$stock',
			stock_minimo = '$stock_minimo',
			costo_usd = '$costo_usd',
			ganancia = '$ganancia',
			precio = '$precio'
		WHERE id_producto = '$id_producto'
		");

	$statement->execute();
	header("Location: ../inventario");
}

		

		
?>