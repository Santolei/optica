<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';

// --- Variables traidas del formulario de ingreso de producto --- // 
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$costo_usd = $_POST['costo_usd'];
$ganancia = $_POST['ganancia'];
$precio = $_POST['precio'];

// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo producto en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare('
		INSERT INTO productos (codigo, nombre, categoria, marca, stock, stock_minimo, costo_usd, ganancia, precio
		) 
		VALUES(:codigo, :nombre, :categoria, :marca, :stock, :stock_minimo, :costo_usd, :ganancia, :precio 
		)
		');

	$statement->execute(array(
		':codigo' => $codigo,
		':nombre' => $nombre,
		':categoria' => $categoria,
		':marca' => $marca,
		':stock' => $stock,
		':stock_minimo' => $stock_minimo,
		':costo_usd' => $costo_usd,
		':ganancia' => $ganancia,
		':precio' => $precio

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

