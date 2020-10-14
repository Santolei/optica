<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';

// --- Variables traidas del formulario de ingreso de paciente --- // 
$id_paciente = $_POST['id_paciente'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$obra_social = $_POST['obra_social'];
$doctor = $_POST['doctor'];
$fecha_receta = $_POST['fecha_receta'];
$patologia = $_POST['patologia'];
$gradiacion_od = $_POST['gradiacion_od'];
$gradiacion_oi = $_POST['gradiacion_oi'];
$tipo_lente = $_POST['tipo_lente'];
$material = $_POST['material'];
$producto = $_POST['producto'];
$tratamiento = $_POST['tratamiento'];

// Graduaciones



// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo cliente en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare('
		INSERT INTO ordenes (nombre, tel_cel, dni, obra_social
		) 
		VALUES(:nombre, :tel_cel, :dni, :obra_social
		)
	');

	$statement->execute(array(
		':nombre' => $nombre,
		':tel_cel' => $tel_cel,
		':dni' => $dni,
		':obra_social' => $obra_social
	));
}
		
?>