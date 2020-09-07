<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_tratamiento = $_GET['id'];

// Traigo los productos de la base de datos

$result = $con->PREPARE("
	SELECT * FROM tratamientos
	WHERE id_tratamiento = '$id_tratamiento'");
$result->execute();
$tratamiento = $result->fetch();

require 'views/editar_tratamiento.view.php';
?>