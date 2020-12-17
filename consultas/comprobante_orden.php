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

		if ($tipo_lente === "Monofocal") {
			// MONOFOCAL LEJOS ---------------------------------------------------
		    // Ojo derecho
		    $monofocal_lejos_der_esf = $ultima_orden[0]['monofocal_lejos_der_esf'];
		    $monofocal_lejos_der_cil = $ultima_orden[0]['monofocal_lejos_der_cil'];
		    $monofocal_lejos_der_eje = $ultima_orden[0]['monofocal_lejos_der_eje'];
		    $monofocal_lejos_der_add = $ultima_orden[0]['monofocal_lejos_der_add'];
			// Ojo izquierdo
			$monofocal_lejos_izq_esf = $ultima_orden[0]['monofocal_lejos_izq_esf'];
		    $monofocal_lejos_izq_cil = $ultima_orden[0]['monofocal_lejos_izq_cil'];
		    $monofocal_lejos_izq_eje = $ultima_orden[0]['monofocal_lejos_izq_eje'];
		    $monofocal_lejos_izq_add = $ultima_orden[0]['monofocal_lejos_izq_add'];

		    // MONOFOCAL INTERMEDIA ----------------------------------------------
		    // Ojo derecho
		    $monofocal_intermedia_der_esf = $ultima_orden[0]['monofocal_intermedia_der_esf'];
		    $monofocal_intermedia_der_cil = $ultima_orden[0]['monofocal_intermedia_der_cil'];
		    $monofocal_intermedia_der_eje = $ultima_orden[0]['monofocal_intermedia_der_eje'];
		    $monofocal_intermedia_der_add = $ultima_orden[0]['monofocal_intermedia_der_add'];
			// Ojo izquierdo
			$monofocal_intermedia_izq_esf = $ultima_orden[0]['monofocal_intermedia_izq_esf'];
		    $monofocal_intermedia_izq_cil = $ultima_orden[0]['monofocal_intermedia_izq_cil'];
		    $monofocal_intermedia_izq_eje = $ultima_orden[0]['monofocal_intermedia_izq_eje'];
		    $monofocal_intermedia_izq_add = $ultima_orden[0]['monofocal_intermedia_izq_add'];

		    // MONOFOCAL CERCA ---------------------------------------------------
		    // Ojo derecho
		    $monofocal_cerca_der_esf = $ultima_orden[0]['monofocal_cerca_der_esf'];
		    $monofocal_cerca_der_cil = $ultima_orden[0]['monofocal_cerca_der_cil'];
		    $monofocal_cerca_der_eje = $ultima_orden[0]['monofocal_cerca_der_eje'];
		    $monofocal_cerca_der_add = $ultima_orden[0]['monofocal_cerca_der_add'];
			// Ojo izquierdo
			$monofocal_cerca_izq_esf = $ultima_orden[0]['monofocal_cerca_izq_esf'];
		    $monofocal_cerca_izq_cil = $ultima_orden[0]['monofocal_cerca_izq_cil'];
		    $monofocal_cerca_izq_eje = $ultima_orden[0]['monofocal_cerca_izq_eje'];
		    $monofocal_cerca_izq_add = $ultima_orden[0]['monofocal_cerca_izq_add'];	
		}

		else if ($tipo_lente === "Bifocal"){
			// BIFOCAL -----------------------------------------------------------
		    // Ojo derecho
		    $bifocal_der_esf = $ultima_orden[0]['bifocal_der_esf'];
		    $bifocal_der_cil = $ultima_orden[0]['bifocal_der_cil'];
		    $bifocal_der_eje = $ultima_orden[0]['bifocal_der_eje'];
		    $bifocal_der_add = $ultima_orden[0]['bifocal_der_add'];
			// Ojo izquierdo
			$bifocal_izq_esf = $ultima_orden[0]['bifocal_izq_esf'];
		    $bifocal_izq_cil = $ultima_orden[0]['bifocal_izq_cil'];
		    $bifocal_izq_eje = $ultima_orden[0]['bifocal_izq_eje'];
		    $bifocal_izq_add = $ultima_orden[0]['bifocal_izq_add'];
		}
		else if ($tipo_lente === "Multifocal"){
			// MULTIFOCAL --------------------------------------------------------
		    // Ojo derecho
		    $multifocal_der_esf = $ultima_orden[0]['multifocal_der_esf'];
		    $multifocal_der_cil = $ultima_orden[0]['multifocal_der_cil'];
		    $multifocal_der_eje = $ultima_orden[0]['multifocal_der_eje'];
		    $multifocal_der_add = $ultima_orden[0]['multifocal_der_add'];
			// Ojo izquierdo
			$multifocal_izq_esf = $ultima_orden[0]['multifocal_izq_esf'];
		    $multifocal_izq_cil = $ultima_orden[0]['multifocal_izq_cil'];
		    $multifocal_izq_eje = $ultima_orden[0]['multifocal_izq_eje'];
		    $multifocal_izq_add = $ultima_orden[0]['multifocal_izq_add'];
		}
		

	}

	
 ?>