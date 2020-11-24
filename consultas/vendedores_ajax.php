<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM vendedores
	ORDER BY nombre
	');
	$query->execute();
$list = $query->fetchAll();
echo '<option class="d-none" value="0">'.'Seleccionar vendedor'.'</option>'; 
foreach ($list as $fila) {
	echo '<option value="'.$fila['id_vendedor'].'">'. $fila['nombre']  . '</option>'; 
}


?>