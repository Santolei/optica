<?php

$query = $con->prepare ('SELECT * FROM vendedores');
	$query->execute();
$vendedores = $query->fetchAll();
?>