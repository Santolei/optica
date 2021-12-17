<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //

require '../config/conexion.php';

// --------------------------------- //
// --------------------------------- //


//Recogemos la cadena
$busqueda=$_POST['cadena'];

if (!$con) {
	echo 'Fallo la conexion';
} else {
	if (isset($busqueda) and $busqueda != "") {
		$statement = $con->prepare("SELECT * FROM pacientes WHERE dni = $busqueda");
		$statement->execute();
		$resultado = $statement->fetchAll();
		
		foreach($resultado as $paciente){
			$nombre_paciente = $paciente['nombre'];

			echo ("<strong class='mb-1 text-center'>¡Ese dni ya está en uso!</strong> <strong class='bold-text text-center alert alert-danger'>$nombre_paciente</strong>
				");
		}


	} 
}



?>