<?php 
	require_once 'vendor/autoload.php';
	define ('ROOT', __DIR__);
	
	use Lilia\Controllers\ChaussettesController;

	ChaussettesController::chaussettes();
?>