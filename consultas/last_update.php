<?php 
$result = $con->PREPARE("
	SELECT modificado
	FROM productos
	ORDER BY modificado DESC
	LIMIT 1
	");
$result->execute();
$last_update = $result->fetch();
$last_update = $last_update[0];
 ?>
