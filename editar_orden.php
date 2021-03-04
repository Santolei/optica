<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_orden = $_GET['id'];

// Traigo los productos de la base de datos

$result = $con->PREPARE("
	SELECT * FROM ordenes
	WHERE id = '$id_orden'");
$result->execute();
$orden = $result->fetch();

require 'views/editar_orden.view.php';
?>