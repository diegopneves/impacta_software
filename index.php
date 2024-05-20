<?php
	session_start();
	require('sistemaController.php');
	require('sistemaModel.php');
	

	define('INCLUDE_PATH','http://localhost/projeto_sistema_servicos/');

	$bazarController = new sistemaController();
	$bazarController->index();

?>  