<?php

$query = $con->prepare ('SELECT * FROM usuarios');
	$query->execute();
$usuarios = $query->fetchAll();

$query2 = $con->prepare("
SELECT * FROM usuarios
WHERE nombre = '$usuario_login' 
");
$query2->execute();
$usuario_logueado = $query2->fetch();
?>