<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM categorias
	ORDER BY nombre
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar categoría'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['nombre'].'">'.$fila['nombre'].'</option>'; 
}


?>