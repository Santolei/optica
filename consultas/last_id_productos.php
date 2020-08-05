<?php 
	// --- Consulta para traer el ultimo código de producto ingresado ---- //

	$query = $con->prepare ('
		SELECT id_producto 
		FROM productos
		ORDER BY id_producto DESC
		LIMIT 1
		');
	$query->execute();
	$last_id = $query->fetch();
	$last_id = $last_id[0];

	$query2 = $con->prepare ("
		SELECT codigo 
		FROM productos
		WHERE id_producto = '$last_id'
		LIMIT 1
		");
	$query2->execute();
	$ultimo_codigo = $query2->fetch();
	$ultimo_codigo = $ultimo_codigo[0];

	// Al ultimo código le sumo 1 para hacerlo autoincrementable pero el usuario puede cambiarlo si lo desea
	$siguiente_codigo = $ultimo_codigo + 1;
 ?>