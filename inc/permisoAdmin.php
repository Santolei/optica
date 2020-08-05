<?php 
require_once 'consultas/usuarios.php';
		
		// print_r($usuario_login);

foreach ($usuarios as $usuario) {
	if (strtolower($usuario['nombre']) == strtolower($usuario_login) and $usuario['rol'] != 1 ) {
		header('Location: error.php');
		break;
	}	
}
?>