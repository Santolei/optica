<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //

require 'config/conexion.php';

// --- Traigo las órdenes de la Base de datos que no estén en entregado---- //

$result = $con->PREPARE("
	SELECT * FROM ordenes
	WHERE NOT estado = 'Entregado'
	");
$result->execute();
$ordenes = $result->fetchAll();

$active_home="active";
require 'views/index.view.php';

;?>