<?php 
	require __DIR__ .'/../Models/Armoire.php';
	require __DIR__ .'/../vendor/autoload.php';

	class ChaussettesController {
		public function chaussettes() {
			$armoire = Armoire:: all(50, 0);
			require __DIR__ .'/../Views/chaussettes.php';
		}
	}
	
?>