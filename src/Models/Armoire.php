<?php 
	namespace Lilia\Models;
	use ORM;
	
	class Armoire {
		private $db;

		public function __construct() {
			ORM::configure('mysql:host=localhost;dbname=mon_armoire');
			ORM::configure('username', 'root');
			ORM::configure('password', 'simplonco');

			$this->db = ORM::for_table('mes_chaussettes');
		}

		public function getInstance() {
			return $this->db;
		}

		public static function all($limit=Null, $offset=Null) {
			$all = new self();
			return $all->getInstance()->limit($limit)->offset($offset)->find_many();
		}

		public static function get($id) {
			$get = new self();
			return $get->db->find_one($id);
		}
	}

?>