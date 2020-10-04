<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_vendedor = $_GET['id'];

// Traigo el usuario de la base de datos

$result = $con->PREPARE("
	SELECT * FROM vendedores
	WHERE id_vendedor = '$id_vendedor'");
$result->execute();
$vendedor_editar = $result->fetch();

// --------------------------------- //
// --------------------------------- //
// Esta página solo la verán los administradores
// --------------------------------- //

include 'inc/permisoAdmin.php';

require 'views/editar_vendedor.view.php';
?>