<?php 
	// --- traigo el ultimo id de la url---- //
	$id_orden = $_GET['id_orden'];
	// --- Consulta para traer la ultima venta ---- //

	$query = $con->prepare ("
		SELECT * FROM ordenes
		WHERE id = $id_orden
	");
	$query->execute();
	$ultima_orden = $query->fetchAll();
	if (!$ultima_orden) {
		echo("No existe ese comprobante");
	} else {
		// --- datos de la orden ---- //
		$nombre = $ultima_orden[0]['nombre'];
		$fecha = $ultima_orden[0]['fecha'];
		$fecha_venta = time( "d-m-Y", strtotime($fecha));
		$telefono = $ultima_orden[0]['telefono'];
		$doctor = $ultima_orden[0]['doctor'];
		$tipo_lente = $ultima_orden[0]['tipo_lente'];
		$material = $ultima_orden[0]['material'];
		$producto = $ultima_orden[0]['producto'];
		$armazon = $ultima_orden[0]['marca_armazon'];

		// Graduaciones
		$monofocal_lejos_der = $ultima_orden[0]['monofocal_lejos_der'];
		$monofocal_lejos_izq = $ultima_orden[0]['monofocal_lejos_izq'];
		$monofocal_media_der = $ultima_orden[0]['monofocal_media_der'];
		$monofocal_media_izq = $ultima_orden[0]['monofocal_media_izq'];
		$monofocal_cerca_der = $ultima_orden[0]['monofocal_cerca_der'];
		$monofocal_cerca_izq = $ultima_orden[0]['monofocal_cerca_izq'];
		$bifocal_lejos_der = $ultima_orden[0]['bifocal_lejos_der'];
		$bifocal_lejos_izq = $ultima_orden[0]['bifocal_lejos_izq'];
		$bifocal_adicion_der = $ultima_orden[0]['bifocal_adicion_der'];
		$bifocal_adicion_izq = $ultima_orden[0]['bifocal_adicion_izq'];
		$multifocal_lejos_der = $ultima_orden[0]['multifocal_lejos_der'];
		$multifocal_lejos_izq = $ultima_orden[0]['multifocal_lejos_izq'];
		$multifocal_adicion_der = $ultima_orden[0]['multifocal_adicion_der'];
		$multifocal_adicion_izq = $ultima_orden[0]['multifocal_adicion_izq'];

	}

	
 ?>