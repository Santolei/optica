<?php 
	// --- Consulta para traer las marcas ---- //

	$query = $con->prepare ('SELECT * FROM marcas');
	$query->execute();
	$lista_marcas = $query->fetchAll();
 ?>