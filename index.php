<?php 
// --- Controlador de sesiones ---- //
include 'inc/sessions.php';
// --- Archivos de configuración y conexión a la Base de datos ---- //

require 'config/conexion.php';

$active_home="active";
require 'views/index.view.php';

;?>