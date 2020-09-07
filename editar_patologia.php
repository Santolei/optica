<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_patologia = $_GET['id'];

// Traigo los productos de la base de datos

$result = $con->PREPARE("
	SELECT * FROM patologias
	WHERE id_patologia = '$id_patologia'");
$result->execute();
$patologia = $result->fetch();

require 'views/editar_patologia.view.php';
?>