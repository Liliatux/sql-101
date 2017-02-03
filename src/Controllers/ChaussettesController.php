<?php 
	namespace Lilia\Controllers;
	use Lilia\Models\Armoire;

	class ChaussettesController {
		public static function chaussettes() {
			$armoire = Armoire:: all(50, 0);
			require ROOT .'/src/Views/chaussettes.php';
		}
	}
	
?>