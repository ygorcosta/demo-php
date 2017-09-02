<?php 
	$link = mysqli_connect('db', 'root', 'passw0rd');
	if (!$link) {
		die('Não foi possível conectar: ' . mysqli_error());
	}
	echo 'Conexão bem sucedida';
	mysqli_close($link);
?>