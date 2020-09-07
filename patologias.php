<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //
require 'config/conexion.php';

// agrego la clase active al sidebar
$active_patologias="active";

// --------------------------------- //
// --------------------------------- //

// Traigo las categorías de la base de datos

$result = $con->PREPARE("SELECT * FROM patologias");
$result->execute();
$patologias = $result->fetchAll();

// -- Template de categorias -- //
require 'views/patologias.view.php';

 ?>