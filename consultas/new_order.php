<?php 

// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';




// --------------------------------- //
// --------------------------------- //
// Inserto el nuevo paciente en la BD

if (!$con) {
	echo 'Fallo la conexion';
} else {

	/*
	|--------------------------------------------------------------------------
	| Selecciono el ultimo Id de la tabla ordenes y le voy a sumar 1 que será el id de la venta
	|--------------------------------------------------------------------------
	*/

	$statement = $con->prepare("
		SELECT * FROM ordenes
		ORDER BY id desc
		LIMIT 1
	");
    $statement->execute();
	$ultimo = $statement->fetch();
	$id_anterior = $ultimo['id'];
	$id_anterior = intval($id_anterior);
	$nuevo_id = $id_anterior + 1;

	// --- Variables traidas del formulario de nueva orden --- // 
	// Datos paciente

	$id_paciente = $_POST['id_paciente'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$dni = $_POST['dni'];
	$obra_social = $_POST['obra_social'];

	// Datos receta
	$doctor = $_POST['doctor'];
	$fecha_receta = $_POST['fecha_receta'];
	$patologia = $_POST['patologia'];
	$graduacion_od = $_POST['graduacion_od'];
	$graduacion_oi = $_POST['graduacion_oi'];

	// Datos cristales
	$tipo_lente = $_POST['tipo_lente'];
	$material = $_POST['material'];
	$producto = $_POST['producto'];
	$tratamiento = $_POST['tratamiento'];

	// Graduaciones
	// Checks

	$checkbox_lejos = $_POST['checkbox_lejos'];
	$checkbox_intermedia = $_POST['checkbox_intermedia'];
	$checkbox_cerca = $_POST['checkbox_cerca'];

	// Datos de armazón
	$marca_armazon = $_POST['marca_armazon'];
	$material_armazon = $_POST['material_armazon'];
	$tipo_armazon = $_POST['tipo_armazon'];
	$distancia = $_POST['distancia'];
	$altura = $_POST['altura'];

	// Total seña y saldo
	$total = $_POST['total'];
	$senia = $_POST['senia'];
	$saldo = $_POST['saldo'];

	// -------------------------------------------------------
	// -------------------------------------------------------
	// Inserto datos en la tabla dependiendo de si el lente es
	// Mono,bi o multifocal.

	if ($tipo_lente === "Monofocal") {

		// MONOFOCAL LEJOS ---------------------------------------------------
	    // Ojo derecho
	    $monofocal_lejos_der_esf = $_POST['monofocal_lejos_der_esf'];
	    $monofocal_lejos_der_cil = $_POST['monofocal_lejos_der_cil'];
	    $monofocal_lejos_der_eje = $_POST['monofocal_lejos_der_eje'];
	    $monofocal_lejos_der_add = $_POST['monofocal_lejos_der_add'];
		// Ojo izquierdo
		$monofocal_lejos_izq_esf = $_POST['monofocal_lejos_izq_esf'];
	    $monofocal_lejos_izq_cil = $_POST['monofocal_lejos_izq_cil'];
	    $monofocal_lejos_izq_eje = $_POST['monofocal_lejos_izq_eje'];
	    $monofocal_lejos_izq_add = $_POST['monofocal_lejos_izq_add'];

	    // MONOFOCAL INTERMEDIA ----------------------------------------------
	    // Ojo derecho
	    $monofocal_intermedia_der_esf = $_POST['monofocal_intermedia_der_esf'];
	    $monofocal_intermedia_der_cil = $_POST['monofocal_intermedia_der_cil'];
	    $monofocal_intermedia_der_eje = $_POST['monofocal_intermedia_der_eje'];
	    $monofocal_intermedia_der_add = $_POST['monofocal_intermedia_der_add'];
		// Ojo izquierdo
		$monofocal_intermedia_izq_esf = $_POST['monofocal_intermedia_izq_esf'];
	    $monofocal_intermedia_izq_cil = $_POST['monofocal_intermedia_izq_cil'];
	    $monofocal_intermedia_izq_eje = $_POST['monofocal_intermedia_izq_eje'];
	    $monofocal_intermedia_izq_add = $_POST['monofocal_intermedia_izq_add'];

	    // MONOFOCAL CERCA ---------------------------------------------------
	    // Ojo derecho
	    $monofocal_cerca_der_esf = $_POST['monofocal_cerca_der_esf'];
	    $monofocal_cerca_der_cil = $_POST['monofocal_cerca_der_cil'];
	    $monofocal_cerca_der_eje = $_POST['monofocal_cerca_der_eje'];
	    $monofocal_cerca_der_add = $_POST['monofocal_cerca_der_add'];
		// Ojo izquierdo
		$monofocal_cerca_izq_esf = $_POST['monofocal_cerca_izq_esf'];
	    $monofocal_cerca_izq_cil = $_POST['monofocal_cerca_izq_cil'];
	    $monofocal_cerca_izq_eje = $_POST['monofocal_cerca_izq_eje'];
	    $monofocal_cerca_izq_add = $_POST['monofocal_cerca_izq_add'];


		$statement = $con->prepare('
			INSERT INTO ordenes (id_paciente, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, graduacion_od, graduacion_oi, tipo_lente, material, producto, tratamiento, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, total, senia, saldo, monofocal_lejos_der, monofocal_lejos_izq, monofocal_media_der, monofocal_media_izq, monofocal_cerca_der, monofocal_cerca_izq
			) 
			VALUES(:id_paciente, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :graduacion_od, :graduacion_oi, :tipo_lente, :material, :producto, :tratamiento, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :total, :senia, :saldo, :monofocal_lejos_der, :monofocal_lejos_izq, :monofocal_media_der, :monofocal_media_izq, :monofocal_cerca_der, :monofocal_cerca_izq
			)
		');

		$statement->execute(array(
			':id_paciente' => $id_paciente,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':graduacion_od' => $graduacion_od,
			':graduacion_oi' => $graduacion_oi,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':monofocal_lejos_der' => $monofocal_lejos_der,
			':monofocal_lejos_izq' => $monofocal_lejos_izq,
			':monofocal_media_der' => $monofocal_media_der,
			':monofocal_media_izq' => $monofocal_media_izq,
			':monofocal_cerca_der' => $monofocal_cerca_der,
			':monofocal_cerca_izq' => $monofocal_cerca_izq
		));
	}

	else if ($tipo_lente === "Bifocal") {

		// BIFOCAL -----------------------------------------------------------
	    // Ojo derecho
	    $bifocal_der_esf = $_POST['bifocal_der_esf'];
	    $bifocal_der_cil = $_POST['bifocal_der_cil'];
	    $bifocal_der_eje = $_POST['bifocal_der_eje'];
	    $bifocal_der_add = $_POST['bifocal_der_add'];
		// Ojo izquierdo
		$bifocal_izq_esf = $_POST['bifocal_izq_esf'];
	    $bifocal_izq_cil = $_POST['bifocal_izq_cil'];
	    $bifocal_izq_eje = $_POST['bifocal_izq_eje'];
	    $bifocal_izq_add = $_POST['bifocal_izq_add'];

		$statement2 = $con->prepare('
			INSERT INTO ordenes (id_paciente, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, graduacion_od, graduacion_oi, tipo_lente, material, producto, tratamiento, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, total, senia, saldo, bifocal_lejos_der, bifocal_lejos_izq, bifocal_adicion_der, bifocal_adicion_izq
			) 
			VALUES(:id_paciente, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :graduacion_od, :graduacion_oi, :tipo_lente, :material, :producto, :tratamiento, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :total, :senia, :saldo, :bifocal_lejos_der, :bifocal_lejos_izq, :bifocal_adicion_der, :bifocal_adicion_izq
			)
		');

		$statement2->execute(array(
			':id_paciente' => $id_paciente,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':graduacion_od' => $graduacion_od,
			':graduacion_oi' => $graduacion_oi,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':bifocal_lejos_der' => $bifocal_lejos_der,
			':bifocal_lejos_izq' => $bifocal_lejos_izq,
			':bifocal_adicion_der' => $bifocal_adicion_der,
			':bifocal_adicion_izq' => $bifocal_adicion_izq
		));
	}

	else if ($tipo_lente === "Multifocal") {

		// MULTIFOCAL --------------------------------------------------------
	    // Ojo derecho
	    $multifocal_der_esf = $_POST['multifocal_der_esf'];
	    $multifocal_der_cil = $_POST['multifocal_der_cil'];
	    $multifocal_der_eje = $_POST['multifocal_der_eje'];
	    $multifocal_der_add = $_POST['multifocal_der_add'];
		// Ojo izquierdo
		$multifocal_izq_esf = $_POST['multifocal_izq_esf'];
	    $multifocal_izq_cil = $_POST['multifocal_izq_cil'];
	    $multifocal_izq_eje = $_POST['multifocal_izq_eje'];
	    $multifocal_izq_add = $_POST['multifocal_izq_add'];

		$statement3 = $con->prepare('
			INSERT INTO ordenes (id_paciente, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, graduacion_od, graduacion_oi, tipo_lente, material, producto, tratamiento, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, total, senia, saldo, multifocal_lejos_der, multifocal_lejos_izq, multifocal_adicion_der, multifocal_adicion_izq
			) 
			VALUES(:id_paciente, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :graduacion_od, :graduacion_oi, :tipo_lente, :material, :producto, :tratamiento, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :total, :senia, :saldo, :multifocal_lejos_der, :multifocal_lejos_izq, :multifocal_adicion_der, :multifocal_adicion_izq
			)
		');

		$statement3->execute(array(
			':id_paciente' => $id_paciente,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':graduacion_od' => $graduacion_od,
			':graduacion_oi' => $graduacion_oi,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':multifocal_lejos_der' => $multifocal_lejos_der,
			':multifocal_lejos_izq' => $multifocal_lejos_izq,
			':multifocal_adicion_der' => $multifocal_adicion_der,
			':multifocal_adicion_izq' => $multifocal_adicion_izq
		));
	}


	
}

// Muestro el nuevo id que voy a pasar al boton de imprimir comprobante
echo $nuevo_id;
		
?>