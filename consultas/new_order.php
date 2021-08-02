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
	$vendedor = $_POST['vendedor'];
	$sucursal = $_POST['sucursal'];

	// Datos receta
	$doctor = $_POST['doctor'];
	$fecha_receta = $_POST['fecha_receta'];
	$patologia = $_POST['patologia'];
	
	// RECETA LEJOS ---------------------------------------------------
    // Ojo derecho
    $lejos_der_esf_receta = $_POST['lejos_der_esf_receta'];
    $lejos_der_cil_receta = $_POST['lejos_der_cil_receta'];
    $lejos_der_eje_receta = $_POST['lejos_der_eje_receta'];
    $lejos_der_add_receta = $_POST['lejos_der_add_receta'];

	// Ojo izquierdo
    $lejos_izq_esf_receta = $_POST['lejos_izq_esf_receta'];
    $lejos_izq_cil_receta = $_POST['lejos_izq_cil_receta'];
    $lejos_izq_eje_receta = $_POST['lejos_izq_eje_receta'];
    $lejos_izq_add_receta = $_POST['lejos_izq_add_receta'];

    // RECETA INTERMEDIA -----------------------------------------------
    // Ojo derecho
    $intermedia_der_esf_receta = $_POST['intermedia_der_esf_receta'];
    $intermedia_der_cil_receta = $_POST['intermedia_der_cil_receta'];
    $intermedia_der_eje_receta = $_POST['intermedia_der_eje_receta'];
    $intermedia_der_add_receta = $_POST['intermedia_der_add_receta'];

	// Ojo izquierdo
    $intermedia_izq_esf_receta = $_POST['intermedia_izq_esf_receta'];
    $intermedia_izq_cil_receta = $_POST['intermedia_izq_cil_receta'];
    $intermedia_izq_eje_receta = $_POST['intermedia_izq_eje_receta'];
    $intermedia_izq_add_receta = $_POST['intermedia_izq_add_receta'];

    // RECETA CERCA ---------------------------------------------------
    // Ojo derecho
    $cerca_der_esf_receta = $_POST['cerca_der_esf_receta'];
    $cerca_der_cil_receta = $_POST['cerca_der_cil_receta'];
    $cerca_der_eje_receta = $_POST['cerca_der_eje_receta'];
    $cerca_der_add_receta = $_POST['cerca_der_add_receta'];

	// Ojo izquierdo
    $cerca_izq_esf_receta = $_POST['cerca_izq_esf_receta'];
    $cerca_izq_cil_receta = $_POST['cerca_izq_cil_receta'];
    $cerca_izq_eje_receta = $_POST['cerca_izq_eje_receta'];
    $cerca_izq_add_receta = $_POST['cerca_izq_add_receta'];


	// Datos cristales
	$tipo_lente = $_POST['tipo_lente'];
	$material = $_POST['material'];
	$producto = $_POST['producto'];
	$tratamiento = $_POST['tratamiento'];

	// Graduaciones
	// Checks
	if (isset($_POST['checkbox_lejos'])) {
		$checkbox_lejos = $_POST['checkbox_lejos'];
	} else {
		$checkbox_lejos = 0;
	}
	if (isset($_POST['checkbox_intermedia'])) {
		$checkbox_intermedia = $_POST['checkbox_intermedia'];
	} else {
		$checkbox_intermedia = 0;
	}
	if (isset($_POST['checkbox_cerca'])) {
		$checkbox_cerca = $_POST['checkbox_cerca'];
	} else {
		$checkbox_cerca = 0;
	}
	

	// Datos de armazón
	$marca_armazon = $_POST['marca_armazon'];
	$material_armazon = $_POST['material_armazon'];
	$tipo_armazon = $_POST['tipo_armazon'];
	$distancia = $_POST['distancia'];
	$altura = $_POST['altura'];
	$trabajo = $_POST['trabajo'];
	$observaciones = $_POST['observaciones'];

	// Precio de cristales, armazón y otros

	$cristales_precio = $_POST['cristales_precio'];
	$armazon_precio = $_POST['armazon_precio'];
	$otros_precio = $_POST['otros_precio'];
	// Total seña y saldo
	$total = $_POST['total'];
	$senia = $_POST['senia'];
	$saldo = $_POST['saldo'];
	// Metodo de pago
	$metodo_pago = $_POST['metodo_pago'];
	// Estado del trabajo
	$estado = $_POST['estado_trabajo'];
	// Fecha de entrega
	$fecha_entrega = $_POST['fecha_entrega'];

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
			INSERT INTO ordenes (id_paciente, vendedor, sucursal, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, lejos_der_esf_receta, lejos_der_cil_receta, lejos_der_eje_receta, lejos_der_add_receta, lejos_izq_esf_receta, lejos_izq_cil_receta, lejos_izq_eje_receta, lejos_izq_add_receta, intermedia_der_esf_receta, intermedia_der_cil_receta, intermedia_der_eje_receta, intermedia_der_add_receta, intermedia_izq_esf_receta, intermedia_izq_cil_receta, intermedia_izq_eje_receta, intermedia_izq_add_receta, cerca_der_esf_receta, cerca_der_cil_receta, cerca_der_eje_receta, cerca_der_add_receta, cerca_izq_esf_receta, cerca_izq_cil_receta, cerca_izq_eje_receta, cerca_izq_add_receta, tipo_lente, material, producto, tratamiento, checkbox_lejos, checkbox_intermedia, checkbox_cerca, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, cristales_precio, armazon_precio, otros_precio, total, senia, saldo, metodo_pago, fecha_entrega, monofocal_lejos_der_esf, monofocal_lejos_der_cil, monofocal_lejos_der_eje, monofocal_lejos_der_add, monofocal_lejos_izq_esf, monofocal_lejos_izq_cil, monofocal_lejos_izq_eje, monofocal_lejos_izq_add, monofocal_intermedia_der_esf, monofocal_intermedia_der_cil, monofocal_intermedia_der_eje, monofocal_intermedia_der_add, monofocal_intermedia_izq_esf, monofocal_intermedia_izq_cil, monofocal_intermedia_izq_eje, monofocal_intermedia_izq_add, monofocal_cerca_der_esf,
				monofocal_cerca_der_cil, monofocal_cerca_der_eje, monofocal_cerca_der_add, monofocal_cerca_izq_esf, monofocal_cerca_izq_cil, monofocal_cerca_izq_eje, monofocal_cerca_izq_add, trabajo, observaciones, estado
			) 
			VALUES(:id_paciente, :vendedor, :sucursal, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :lejos_der_esf_receta, :lejos_der_cil_receta, :lejos_der_eje_receta, :lejos_der_add_receta, :lejos_izq_esf_receta, :lejos_izq_cil_receta, :lejos_izq_eje_receta, :lejos_izq_add_receta, :intermedia_der_esf_receta, :intermedia_der_cil_receta, :intermedia_der_eje_receta, :intermedia_der_add_receta, :intermedia_izq_esf_receta, :intermedia_izq_cil_receta, :intermedia_izq_eje_receta, :intermedia_izq_add_receta, :cerca_der_esf_receta, :cerca_der_cil_receta, :cerca_der_eje_receta, :cerca_der_add_receta, :cerca_izq_esf_receta, :cerca_izq_cil_receta, :cerca_izq_eje_receta, :cerca_izq_add_receta, :tipo_lente, :material, :producto, :tratamiento, :checkbox_lejos, :checkbox_intermedia, :checkbox_cerca, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :cristales_precio, :armazon_precio, :otros_precio, :total, :senia, :saldo, :metodo_pago, :fecha_entrega, :monofocal_lejos_der_esf, :monofocal_lejos_der_cil, :monofocal_lejos_der_eje, :monofocal_lejos_der_add, :monofocal_lejos_izq_esf, :monofocal_lejos_izq_cil, :monofocal_lejos_izq_eje, :monofocal_lejos_izq_add, :monofocal_intermedia_der_esf, :monofocal_intermedia_der_cil, :monofocal_intermedia_der_eje, :monofocal_intermedia_der_add, :monofocal_intermedia_izq_esf, :monofocal_intermedia_izq_cil, :monofocal_intermedia_izq_eje, :monofocal_intermedia_izq_add, :monofocal_cerca_der_esf,
				:monofocal_cerca_der_cil, :monofocal_cerca_der_eje, :monofocal_cerca_der_add, :monofocal_cerca_izq_esf, :monofocal_cerca_izq_cil, :monofocal_cerca_izq_eje, :monofocal_cerca_izq_add, :trabajo, :observaciones, :estado
			)
		');

		$statement->execute(array(
			':id_paciente' => $id_paciente,
			':vendedor' => $vendedor,
			':sucursal' => $sucursal,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':lejos_der_esf_receta' => $lejos_der_esf_receta,
			':lejos_der_cil_receta' => $lejos_der_cil_receta,
			':lejos_der_eje_receta' => $lejos_der_eje_receta,
			':lejos_der_add_receta' => $lejos_der_add_receta,
			':lejos_izq_esf_receta' => $lejos_izq_esf_receta,
			':lejos_izq_cil_receta' => $lejos_izq_cil_receta,
			':lejos_izq_eje_receta' => $lejos_izq_eje_receta,
			':lejos_izq_add_receta' => $lejos_izq_add_receta,
			':intermedia_der_esf_receta' => $intermedia_der_esf_receta,
			':intermedia_der_cil_receta' => $intermedia_der_cil_receta,
			':intermedia_der_eje_receta' => $intermedia_der_eje_receta,
			':intermedia_der_add_receta' => $intermedia_der_add_receta,
			':intermedia_izq_esf_receta' => $intermedia_izq_esf_receta,
			':intermedia_izq_cil_receta' => $intermedia_izq_cil_receta,
			':intermedia_izq_eje_receta' => $intermedia_izq_eje_receta,
			':intermedia_izq_add_receta' => $intermedia_izq_add_receta,
			':cerca_der_esf_receta' => $cerca_der_esf_receta,
			':cerca_der_cil_receta' => $cerca_der_cil_receta,
			':cerca_der_eje_receta' => $cerca_der_eje_receta,
			':cerca_der_add_receta' => $cerca_der_add_receta,
			':cerca_izq_esf_receta' => $cerca_izq_esf_receta,
			':cerca_izq_cil_receta' => $cerca_izq_cil_receta,
			':cerca_izq_eje_receta' => $cerca_izq_eje_receta,
			':cerca_izq_add_receta' => $cerca_izq_add_receta,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':checkbox_lejos' => $checkbox_lejos, 
			':checkbox_intermedia' => $checkbox_intermedia, 
			':checkbox_cerca' => $checkbox_cerca,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':cristales_precio' => $cristales_precio,
			':armazon_precio' => $armazon_precio,
			':otros_precio' => $otros_precio,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':metodo_pago' => $metodo_pago,
			':fecha_entrega' => $fecha_entrega,
			':monofocal_lejos_der_esf' => $monofocal_lejos_der_esf, 
			':monofocal_lejos_der_cil' => $monofocal_lejos_der_cil, 
			':monofocal_lejos_der_eje' => $monofocal_lejos_der_eje, 
			':monofocal_lejos_der_add' => $monofocal_lejos_der_add, 
			':monofocal_lejos_izq_esf' => $monofocal_lejos_izq_esf, 
			':monofocal_lejos_izq_cil' => $monofocal_lejos_izq_cil, 
			':monofocal_lejos_izq_eje' => $monofocal_lejos_izq_eje, 
			':monofocal_lejos_izq_add' => $monofocal_lejos_izq_add, 
			':monofocal_intermedia_der_esf' => $monofocal_intermedia_der_esf, 
			':monofocal_intermedia_der_cil' => $monofocal_intermedia_der_cil, 
			':monofocal_intermedia_der_eje' => $monofocal_intermedia_der_eje, 
			':monofocal_intermedia_der_add' => $monofocal_intermedia_der_add, 
			':monofocal_intermedia_izq_esf' => $monofocal_intermedia_izq_esf, 
			':monofocal_intermedia_izq_cil' => $monofocal_intermedia_izq_cil, 
			':monofocal_intermedia_izq_eje' => $monofocal_intermedia_izq_eje, 
			':monofocal_intermedia_izq_add' => $monofocal_intermedia_izq_add, 
			':monofocal_cerca_der_esf' => $monofocal_cerca_der_esf,
			':monofocal_cerca_der_cil' => $monofocal_cerca_der_cil, 
			':monofocal_cerca_der_eje' => $monofocal_cerca_der_eje, 
			':monofocal_cerca_der_add' => $monofocal_cerca_der_add, 
			':monofocal_cerca_izq_esf' => $monofocal_cerca_izq_esf, 
			':monofocal_cerca_izq_cil' => $monofocal_cerca_izq_cil, 
			':monofocal_cerca_izq_eje' => $monofocal_cerca_izq_eje, 
			':monofocal_cerca_izq_add' => $monofocal_cerca_izq_add,
			':trabajo' => $trabajo,
			':observaciones' => $observaciones,
			':estado' => $estado
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
			INSERT INTO ordenes (id_paciente, vendedor, sucursal, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, lejos_der_esf_receta, lejos_der_cil_receta, lejos_der_eje_receta, lejos_der_add_receta, lejos_izq_esf_receta, lejos_izq_cil_receta, lejos_izq_eje_receta, lejos_izq_add_receta, intermedia_der_esf_receta, intermedia_der_cil_receta, intermedia_der_eje_receta, intermedia_der_add_receta, intermedia_izq_esf_receta, intermedia_izq_cil_receta, intermedia_izq_eje_receta, intermedia_izq_add_receta, cerca_der_esf_receta, cerca_der_cil_receta, cerca_der_eje_receta, cerca_der_add_receta, cerca_izq_esf_receta, cerca_izq_cil_receta, cerca_izq_eje_receta, cerca_izq_add_receta, tipo_lente, material, producto, tratamiento, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, cristales_precio, armazon_precio, otros_precio, total, senia, saldo, metodo_pago, fecha_entrega, bifocal_der_esf, bifocal_der_cil, bifocal_der_eje, bifocal_der_add, bifocal_izq_esf, bifocal_izq_cil, bifocal_izq_eje, bifocal_izq_add, trabajo, observaciones, estado
			) 
			VALUES(:id_paciente, :vendedor, :sucursal, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :lejos_der_esf_receta, :lejos_der_cil_receta, :lejos_der_eje_receta, :lejos_der_add_receta, :lejos_izq_esf_receta, :lejos_izq_cil_receta, :lejos_izq_eje_receta, :lejos_izq_add_receta, :intermedia_der_esf_receta, :intermedia_der_cil_receta, :intermedia_der_eje_receta, :intermedia_der_add_receta, :intermedia_izq_esf_receta, :intermedia_izq_cil_receta, :intermedia_izq_eje_receta, :intermedia_izq_add_receta, :cerca_der_esf_receta, :cerca_der_cil_receta, :cerca_der_eje_receta, :cerca_der_add_receta, :cerca_izq_esf_receta, :cerca_izq_cil_receta, :cerca_izq_eje_receta, :cerca_izq_add_receta, :tipo_lente, :material, :producto, :tratamiento, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :cristales_precio, :armazon_precio, :otros_precio, :total, :senia, :saldo, :metodo_pago, :fecha_entrega, :bifocal_der_esf, :bifocal_der_cil, :bifocal_der_eje, :bifocal_der_add, :bifocal_izq_esf, :bifocal_izq_cil, :bifocal_izq_eje, :bifocal_izq_add, :trabajo, :observaciones, :estado
			)
		');

		$statement2->execute(array(
			':id_paciente' => $id_paciente,
			':vendedor' => $vendedor,
			':sucursal' => $sucursal,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':lejos_der_esf_receta' => $lejos_der_esf_receta,
			':lejos_der_cil_receta' => $lejos_der_cil_receta,
			':lejos_der_eje_receta' => $lejos_der_eje_receta,
			':lejos_der_add_receta' => $lejos_der_add_receta,
			':lejos_izq_esf_receta' => $lejos_izq_esf_receta,
			':lejos_izq_cil_receta' => $lejos_izq_cil_receta,
			':lejos_izq_eje_receta' => $lejos_izq_eje_receta,
			':lejos_izq_add_receta' => $lejos_izq_add_receta,
			':intermedia_der_esf_receta' => $intermedia_der_esf_receta,
			':intermedia_der_cil_receta' => $intermedia_der_cil_receta,
			':intermedia_der_eje_receta' => $intermedia_der_eje_receta,
			':intermedia_der_add_receta' => $intermedia_der_add_receta,
			':intermedia_izq_esf_receta' => $intermedia_izq_esf_receta,
			':intermedia_izq_cil_receta' => $intermedia_izq_cil_receta,
			':intermedia_izq_eje_receta' => $intermedia_izq_eje_receta,
			':intermedia_izq_add_receta' => $intermedia_izq_add_receta,
			':cerca_der_esf_receta' => $cerca_der_esf_receta,
			':cerca_der_cil_receta' => $cerca_der_cil_receta,
			':cerca_der_eje_receta' => $cerca_der_eje_receta,
			':cerca_der_add_receta' => $cerca_der_add_receta,
			':cerca_izq_esf_receta' => $cerca_izq_esf_receta,
			':cerca_izq_cil_receta' => $cerca_izq_cil_receta,
			':cerca_izq_eje_receta' => $cerca_izq_eje_receta,
			':cerca_izq_add_receta' => $cerca_izq_add_receta,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':cristales_precio' => $cristales_precio,
			':armazon_precio' => $armazon_precio,
			':otros_precio' => $otros_precio,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':metodo_pago' => $metodo_pago,
			':fecha_entrega' => $fecha_entrega,
			':bifocal_der_esf' => $bifocal_der_esf, 
			':bifocal_der_cil' => $bifocal_der_cil, 
			':bifocal_der_eje' => $bifocal_der_eje, 
			':bifocal_der_add' => $bifocal_der_add, 
			':bifocal_izq_esf' => $bifocal_izq_esf, 
			':bifocal_izq_cil' => $bifocal_izq_cil, 
			':bifocal_izq_eje' => $bifocal_izq_eje, 
			':bifocal_izq_add' => $bifocal_izq_add,
			':trabajo' => $trabajo,
			':observaciones' => $observaciones,
			':estado' => $estado
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
			INSERT INTO ordenes (id_paciente, vendedor, sucursal, nombre, telefono, dni, obra_social, doctor, fecha_receta, patologia, lejos_der_esf_receta, lejos_der_cil_receta, lejos_der_eje_receta, lejos_der_add_receta, lejos_izq_esf_receta, lejos_izq_cil_receta, lejos_izq_eje_receta, lejos_izq_add_receta, intermedia_der_esf_receta, intermedia_der_cil_receta, intermedia_der_eje_receta, intermedia_der_add_receta, intermedia_izq_esf_receta, intermedia_izq_cil_receta, intermedia_izq_eje_receta, intermedia_izq_add_receta, cerca_der_esf_receta, cerca_der_cil_receta, cerca_der_eje_receta, cerca_der_add_receta, cerca_izq_esf_receta, cerca_izq_cil_receta, cerca_izq_eje_receta, cerca_izq_add_receta, tipo_lente, material, producto, tratamiento, marca_armazon, material_armazon, tipo_armazon, dist_interpupilar, altura, cristales_precio, armazon_precio, otros_precio, total, senia, saldo, metodo_pago, fecha_entrega, multifocal_der_esf, multifocal_der_cil, multifocal_der_eje, multifocal_der_add, multifocal_izq_esf, multifocal_izq_cil, multifocal_izq_eje, multifocal_izq_add, trabajo, observaciones, estado 
			) 
			VALUES(:id_paciente, :vendedor, :sucursal, :nombre, :telefono, :dni, :obra_social, :doctor, :fecha_receta, :patologia, :lejos_der_esf_receta, :lejos_der_cil_receta, :lejos_der_eje_receta, :lejos_der_add_receta, :lejos_izq_esf_receta, :lejos_izq_cil_receta, :lejos_izq_eje_receta, :lejos_izq_add_receta, :intermedia_der_esf_receta, :intermedia_der_cil_receta, :intermedia_der_eje_receta, :intermedia_der_add_receta, :intermedia_izq_esf_receta, :intermedia_izq_cil_receta, :intermedia_izq_eje_receta, :intermedia_izq_add_receta, :cerca_der_esf_receta, :cerca_der_cil_receta, :cerca_der_eje_receta, :cerca_der_add_receta, :cerca_izq_esf_receta, :cerca_izq_cil_receta, :cerca_izq_eje_receta, :cerca_izq_add_receta, :tipo_lente, :material, :producto, :tratamiento, :marca_armazon, :material_armazon, :tipo_armazon, :dist_interpupilar, :altura, :cristales_precio, :armazon_precio, :otros_precio, :total, :senia, :saldo, :metodo_pago, :fecha_entrega, :multifocal_der_esf, :multifocal_der_cil, :multifocal_der_eje, :multifocal_der_add, :multifocal_izq_esf, :multifocal_izq_cil, :multifocal_izq_eje, :multifocal_izq_add, :trabajo, :observaciones, :estado 
			)
		');

		$statement3->execute(array(
			':id_paciente' => $id_paciente,
			':vendedor' => $vendedor,
			':sucursal' => $sucursal,
			':nombre' => $nombre,
			':telefono' => $telefono,
			':dni' => $dni,
			':obra_social' => $obra_social,
			':doctor' => $doctor,
			':fecha_receta' => $fecha_receta,
			':patologia' => $patologia,
			':lejos_der_esf_receta' => $lejos_der_esf_receta,
			':lejos_der_cil_receta' => $lejos_der_cil_receta,
			':lejos_der_eje_receta' => $lejos_der_eje_receta,
			':lejos_der_add_receta' => $lejos_der_add_receta,
			':lejos_izq_esf_receta' => $lejos_izq_esf_receta,
			':lejos_izq_cil_receta' => $lejos_izq_cil_receta,
			':lejos_izq_eje_receta' => $lejos_izq_eje_receta,
			':lejos_izq_add_receta' => $lejos_izq_add_receta,
			':intermedia_der_esf_receta' => $intermedia_der_esf_receta,
			':intermedia_der_cil_receta' => $intermedia_der_cil_receta,
			':intermedia_der_eje_receta' => $intermedia_der_eje_receta,
			':intermedia_der_add_receta' => $intermedia_der_add_receta,
			':intermedia_izq_esf_receta' => $intermedia_izq_esf_receta,
			':intermedia_izq_cil_receta' => $intermedia_izq_cil_receta,
			':intermedia_izq_eje_receta' => $intermedia_izq_eje_receta,
			':intermedia_izq_add_receta' => $intermedia_izq_add_receta,
			':cerca_der_esf_receta' => $cerca_der_esf_receta,
			':cerca_der_cil_receta' => $cerca_der_cil_receta,
			':cerca_der_eje_receta' => $cerca_der_eje_receta,
			':cerca_der_add_receta' => $cerca_der_add_receta,
			':cerca_izq_esf_receta' => $cerca_izq_esf_receta,
			':cerca_izq_cil_receta' => $cerca_izq_cil_receta,
			':cerca_izq_eje_receta' => $cerca_izq_eje_receta,
			':cerca_izq_add_receta' => $cerca_izq_add_receta,
			':tipo_lente' => $tipo_lente,
			':material' => $material,
			':producto' => $producto,
			':tratamiento' => $tratamiento,
			':marca_armazon' => $marca_armazon,
			':material_armazon' => $material_armazon,
			':tipo_armazon' => $tipo_armazon,
			':dist_interpupilar' => $distancia,
			':altura' => $altura,
			':cristales_precio' => $cristales_precio,
			':armazon_precio' => $armazon_precio,
			':otros_precio' => $otros_precio,
			':total' => $total,
			':senia' => $senia,
			':saldo' => $saldo,
			':metodo_pago' => $metodo_pago,
			':fecha_entrega' => $fecha_entrega,
			':multifocal_der_esf' => $multifocal_der_esf,
			':multifocal_der_cil' => $multifocal_der_cil, 
			':multifocal_der_eje' => $multifocal_der_eje, 
			':multifocal_der_add' => $multifocal_der_add, 
			':multifocal_izq_esf' => $multifocal_izq_esf, 
			':multifocal_izq_cil' => $multifocal_izq_cil, 
			':multifocal_izq_eje' => $multifocal_izq_eje, 
			':multifocal_izq_add' => $multifocal_izq_add,
			':trabajo' => $trabajo,
			':observaciones' => $observaciones,
			':estado' => $estado
		));
	}

}

// Muestro el nuevo id que voy a pasar al boton de imprimir comprobante
echo $nuevo_id;
		
?>