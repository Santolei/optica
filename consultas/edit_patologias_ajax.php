<?php 
require '../config/conexion.php';

$query = $con->prepare ('
	SELECT * FROM patologias
	ORDER BY titulo
	');
	$query->execute();
$list = $query->fetchAll(); 
foreach ($list as $fila) {
	echo '<option value="'.$fila['titulo'].'">'.$fila['titulo'] . '</option>'; 
}


?>