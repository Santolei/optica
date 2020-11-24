<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// --------------------------------- //
// --------------------------------- //
// Traigo la venta
// --------------------------------- //

require 'consultas/comprobante_orden.php';

// --------------------------------- //
// --------------------------------- //
// Template del inventario
// --------------------------------- //

require 'views/comprobante.view.php'; 
?>