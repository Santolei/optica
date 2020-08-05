<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

$id_usuario = $_GET['id'];

// Traigo el usuario de la base de datos

$result = $con->PREPARE("
	SELECT * FROM usuarios
	WHERE id_usuario = '$id_usuario'");
$result->execute();
$usuario_editar = $result->fetch();

// --------------------------------- //
// --------------------------------- //
// Voy a traer los datos de roles y usuarios

require_once 'consultas/roles.php';

// --------------------------------- //
// --------------------------------- //
// Esta página solo la verán los administradores
// --------------------------------- //

include 'inc/permisoAdmin.php';

require 'views/editar_usuario.view.php';
?>