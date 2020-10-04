<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';

// --- Variables traidas del formulario de ingreso de producto --- // 
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
	$statement = $con->prepare('
		INSERT INTO productos (codigo, nombre, categoria, material
		) 
		VALUES(:codigo, :nombre, :categoria, :material 
		)
		');

	$statement->execute(array(
		':codigo' => $codigo,
		':nombre' => $nombre,
		':categoria' => $categoria,
		':material' => $material
	));

	// --------------------------------- //
	// --------------------------------- //
	// Reviso cual es el ultimo Id


	$id = $con->prepare('
		SELECT id_producto 
		FROM productos
		ORDER BY id_producto DESC
		LIMIT 1
		');
		$id->execute();
		$last_id = $id->fetch();

	$last_id = $last_id['id_producto'];

	$statement = $con->prepare("
		UPDATE productos
		SET editar = '$last_id',
			borrar = '$last_id'
		WHERE id_producto = '$last_id'
		");
	$statement->execute();

	header("Location: ../inventario");
}
		
?>

