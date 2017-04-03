<?php 

	/**
	* 
	*/
	class PostModel extends ParentModel
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getAllPost($tablePost, $tableCat)
		{

			$sql = "SELECT $tablePost.*, $tableCat.name FROM $tablePost INNER JOIN $tableCat ON $tablePost.cat = $tableCat.id ORDER BY $tablePost.id DESC LIMIT 5";
			return $this->db->select($sql);
		}

		public function getPostById($tablePost, $tableCat, $id)
		{
			$sql = "SELECT $tablePost.*, $tableCat.name FROM $tablePost INNER JOIN $tableCat ON $tablePost.cat = $tableCat.id WHERE $tablePost.id = $id";
			//$data = array(':id' => $id);
			return $this->db->select($sql);
		}

		public function getPostByCat($tablePost, $tableCat, $id)
		{
			$sql = "SELECT $tablePost.*, $tableCat.name FROM $tablePost INNER JOIN $tableCat ON $tablePost.cat = $tableCat.id WHERE $tableCat.id = $id";
			//$data = array(':id' => $id);
			return $this->db->select($sql);
		}
	}
 ?>