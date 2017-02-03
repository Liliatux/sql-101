<?php 
	require_once 'vendor/autoload.php';
	define ('ROOT', __DIR__);
	
	use Lilia\Controllers\ChaussettesController;

	if($_GET['action'] === 'edit') {
		ChaussettesController::edit($_GET['id']);
	} else {
		ChaussettesController::table();
	}
?>