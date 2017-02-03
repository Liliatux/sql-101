<?php 
	namespace Lilia\Controllers;
	use Lilia\Models\Armoire;

	class ChaussettesController {
		public static function table() {
			$armoire = Armoire:: all(50, 0);
			require ROOT .'/src/Views/table.php';
		}

		public static function edit($id) {
			$chaussette = Armoire::get($id);
			require ROOT .'/src/Views/edit.php';
		}
	}
	
?>