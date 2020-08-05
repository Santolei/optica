<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM productos
	ORDER BY nombre
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar producto'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['id_producto'].'">'.$fila['nombre'].'</option>'; 
}


?>