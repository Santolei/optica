<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_paciente = $_GET['id'];

// Traigo los productos de la base de datos

$result = $con->PREPARE("
	SELECT * FROM pacientes
	WHERE id_paciente = '$id_paciente'");
$result->execute();
$paciente = $result->fetch();

require 'views/editar_paciente.view.php';
?>