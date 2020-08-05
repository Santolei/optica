<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM pacientes
	ORDER BY nombre
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar paciente'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['id_paciente'].'">'.$fila['nombre'].' - DNI: ' . $fila['dni'] . '</option>'; 
}


?>