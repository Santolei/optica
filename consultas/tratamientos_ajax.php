<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM tratamientos
	ORDER BY titulo
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar tratamiento'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['titulo'].'">'.$fila['titulo'].'</option>'; 
}


?>
