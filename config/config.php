<?php 

	// --------------------------------- //
	// --------------------------------- //
	// Estos datos deben estar iguales siempre
	
	// ------- Datos de la BD -------- //
	$db = 'optica';
	$usuario = 'root';
	$pass = '';

	// SQL server connection information
	$sql_details = array(
	    'user' => 'root',
	    'pass' => '',
	    'db'   => 'optica',
	    'host' => 'localhost'
	);
	// --------------------------------- //
	// --------------------------------- //
	// Inserto el nuevo producto en la BD

	// ------- Timezone -------- //
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	// ------- Ruta principal -------- //

	define('RUTA', '/optica/');
	// ------- Ip del router -------- //
	// define('IP','http://192.168.0.20');




 ?>