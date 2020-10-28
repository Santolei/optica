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
	$monofocal_lejos_der = $_POST['monofocal_lejos_der'];
	$monofocal_lejos_izq = $_POST['monofocal_lejos_izq'];
	$monofocal_media_der = $_POST['monofocal_media_der'];
	$monofocal_media_izq = $_POST['monofocal_media_izq'];
	$monofocal_cerca_der = $_POST['monofocal_cerca_der'];
	$monofocal_cerca_izq = $_POST['monofocal_cerca_izq'];
	$bifocal_lejos_der = $_POST['bifocal_lejos_der'];
	$bifocal_lejos_izq = $_POST['bifocal_lejos_izq'];
	$bifocal_adicion_der = $_POST['bifocal_adicion_der'];
	$bifocal_adicion_izq = $_POST['bifocal_adicion_izq'];
	$multifocal_lejos_der = $_POST['multifocal_lejos_der'];
	$multifocal_lejos_izq = $_POST['multifocal_lejos_izq'];
	$multifocal_adicion_der = $_POST['multifocal_adicion_der'];
	$multifocal_adicion_izq = $_POST['multifocal_adicion_izq'];

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