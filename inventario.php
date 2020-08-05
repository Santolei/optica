<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_inventario="active";

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
// Traigo el ultimo código ingresado
// --------------------------------- //
require 'consultas/last_id_productos.php';

// --------------------------------- //
// --------------------------------- //
// Actualizado por ultima vez
// --------------------------------- //
include 'consultas/last_update.php';

// --------------------------------- //
// --------------------------------- //
// Template del inventario
// --------------------------------- //

require 'views/inventario.view.php'; 
?>