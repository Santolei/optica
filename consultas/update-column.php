<?php 

// Paso los meses al español
function mes(){
	$mes = date("m");
	switch ($mes) {
		case '01':
			return 'Enero';
			break;
		case '02':
			return 'Febrero';
			break;
		case '03':
			return 'Marzo';
			break;
		case '04':
			return 'Abril';
			break;
		case '05':
			return 'Mayo';
			break;
		case '06':
			return 'Junio';
			break;
		case '07':
			return 'Julio';
			break;
		case '08':
			return 'Agosto';
			break;
		case '09':
			return 'Septiembre';
			break;
		case '10':
			return 'Octubre';
			break;
		case '11':
			return 'Noviembre';
			break;
		case '12':
			return 'Diciembre';
			break;
		
		default:
			'Mes del año';
			break;
	}
	return $mes;
}

$dia = date('Y-m-d');
// --- Archivos de configuración y conexión a la Base de datos ---- //
require '../config/conexion.php';

$statement = $con->prepare("
	UPDATE historial_ventas 
	SET dia = '$dia'
");
$statement->execute();
