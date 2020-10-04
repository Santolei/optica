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