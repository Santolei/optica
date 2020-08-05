<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_producto = $_GET['id'];

// Traigo los productos de la base de datos

$result = $con->PREPARE("
	SELECT * FROM productos
	WHERE id_producto = '$id_producto'");
$result->execute();
$producto = $result->fetch();


// Valor del producto

// Si el costo del producto está en 0 es que lo cargaron en pesos, en ese caso solo muestro
// el precio en pesos, sino muestro la multiplicación del valor del dólar x los pesos x la ganacia.

if ($producto['costo_usd'] != 0 ) {
	$valor_final = $producto['costo_usd'] * $valor_dolar * (($producto['ganancia']/100) + 1);
	
} else{
	$valor_final = $producto['precio'];
}


// --------------------------------- //
// --------------------------------- //
// Traigo las categorías 
// --------------------------------- //

require 'consultas/categorias.php';

// --------------------------------- //
// --------------------------------- //
// Traigo las marcas 
// --------------------------------- //

require 'consultas/marcas.php';

// --------------------------------- //
// --------------------------------- //
// Esta página solo la verán los administradores
// --------------------------------- //

include 'inc/permisoAdmin.php';

// --------------------------------- //
// --------------------------------- //
// Template editar producto
// --------------------------------- //

require 'views/editar_producto.view.php';
?>