<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_ordenes="active";

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
// Template del inventario
// --------------------------------- //

require 'views/ordenes.view.php'; 
?>