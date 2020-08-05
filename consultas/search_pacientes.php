<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //

require '../config/conexion.php';

//Recogemos la cadena
$busqueda=$_POST['cadena'];

if (!$con) {
	echo 'Fallo la conexion';
} else {
	if (isset($busqueda) and $busqueda != "") {
		$statement = $con->prepare("
			SELECT * FROM pacientes 
			WHERE nombre LIKE '%$busqueda%'
			OR dni  LIKE '%$busqueda%'
			");
		$statement->execute();
		$resultado = $statement->fetchAll();
		
		foreach($resultado as $producto){
			$id_paciente = $producto['id_paciente'];
			$nombre = $producto['nombre'];
			$tel_cel = $producto['tel_cel'];
			$dni = $producto['dni'];
			$obra_social = $producto['obra_social'];

			echo ("
				<a class='agregar_paciente mb-2' data-id='$id_paciente' data-nombre='$nombre' data-tel_cel='$tel_cel' data-dni='$dni' data-obra_social='$obra_social'> $nombre <span class='invisible'>$dni</span></a>
				");
		}
	} 
}



?>