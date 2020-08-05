<?php 
require '../config/conexion.php';

// --------------------------------- //
// ID de la url


// --------------------------------- //
// --------------------------------- //
// Traigo datos del formulario
$id_paciente = $_POST['id_paciente'];
$nombre = $_POST['nombre'];
$tel_cel = $_POST['tel_cel'];
$dni = $_POST['dni'];
$obra_social = $_POST['obra_social'];

// --------------------------------- //
// --------------------------------- //
// Edito el cliente en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$statement = $con->prepare("
		UPDATE pacientes
		SET 
			nombre = '$nombre',
			tel_cel = '$tel_cel',
			dni = '$dni',
			obra_social = '$obra_social'
		WHERE id_paciente = '$id_paciente'
		");

	$statement->execute();
	header("Location: ../pacientes");
}

?>