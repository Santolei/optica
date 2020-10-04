<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';
// --- Datos de la sesion ---- //
require '../inc/sessions.php';


// --------------------------------- //
// --------------------------------- //
// VARIABLES
$errores = '';

if (!$con) {
	echo 'Fallo la conexion';
} else {
	$password = $_POST['password_vendedor'];
	$password2 = $_POST['password2_vendedor'];
	$password = hash('sha512', $password);
	$password2 = hash('sha512', $password2);

	if ( $password != $password2) {
		# Si las contraseñas son diferentes:
		$errores .= "<li>Las contraseñas no son iguales <i class='fa fa-meh-o mr-1'></i></li>";
	} else {
		// --------------------------------- //
		// --------------------------------- //
		// Inserto el nuevo usuario en la BD

		$statement = $con->prepare('
		INSERT INTO vendedores (nombre, password) 
		VALUES(:nombre, :password)
		');

		$statement->execute(array(
			':nombre' => $_POST['nombre_vendedor'],
			':password' => $password
		));

		header("Location: ../usuarios");
	}
	
}

		

		
?>