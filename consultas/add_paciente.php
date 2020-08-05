<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';

// --- Variables traidas del formulario de ingreso de paciente --- // 

$nombre = $_POST['nombre'];
$tel_cel = $_POST['tel_cel'];
$dni = $_POST['dni'];
$obra_social = $_POST['obra_social'];

// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo cliente en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare('
		INSERT INTO pacientes (nombre, tel_cel, dni, obra_social
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

	header("Location: ../pacientes");
}
		
?>

