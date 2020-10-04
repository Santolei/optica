<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_usuarios="active";

// --------------------------------- //
// --------------------------------- //
// Voy a traer los datos de roles, usuarios y vendedores

require_once 'consultas/roles.php';
require_once 'consultas/usuarios.php';
require_once 'consultas/vendedores.php';

// --------------------------------- //
// --------------------------------- //
// Template de usuarios
// --------------------------------- //

require 'views/usuarios.view.php'; 
?>