<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM patologias
	ORDER BY titulo
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar patologia'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['titulo'].'">'.$fila['titulo'] . '</option>'; 
}


?>