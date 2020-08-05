<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_pacientes="active";

// --------------------------------- //
// --------------------------------- //
// Template de clientes
// --------------------------------- //

require 'views/pacientes.view.php'; 
?>