<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_tratamientos="active";

// --------------------------------- //
// --------------------------------- //

// Traigo las categorías de la base de datos

$result = $con->PREPARE("SELECT * FROM tratamientos");
$result->execute();
$tratamientos = $result->fetchAll();

// -- Template de categorias -- //
require 'views/tratamientos.view.php';

 ?>