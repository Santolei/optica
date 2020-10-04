<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM productos
	WHERE material = "Otros"
	ORDER BY nombre
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar producto'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['nombre'].'">'.$fila['nombre'].'</option>'; 
}


?>