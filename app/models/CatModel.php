<?php 

	/**
	* 
	*/
	class CatModel extends ParentModel
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function catList($table)
		{

			$sql = "SELECT * FROM $table";
			return $this->db->select($sql);


			//return $this->db->select($table);
			// $sql = 'SELECT * FROM category';
			// $query = $this->db->query($sql);
			// $result = $query->fetchAll();

			// return $result;

			// return array(

			// 		array(
			// 		'catOne' => 'Education',
			// 		'catTwo' => 'Sports',
			// 		'catThree' => 'Health'
			// 		),
					
			// 		array(
			// 		'catOne' => 'Education',
			// 		'catTwo' => 'Sports',
			// 		'catThree' => 'Health'
			// 		)
			// 	);
		}

		public function catById($table, $id)
		{
			$sql = "SELECT * FROM $table WHERE id=:id";
			$data = array(':id' => $id);
			return $this->db->select($sql, $data);

			// $sql = "SELECT * FROM $table WHERE id=:id";
			// $stmt = $this->db->prepare($sql);
			// $stmt->bindParam(':id', $id);
			// $stmt->execute();
			// return $stmt->fetchAll();
		}

		public function insertCat($table, $data)
		{
			return $this->db->insert($table, $data);
		}

		public function catUpdate($table, $data, $cond)
		{
			return $this->db->update($table, $data, $cond);
		}

		public function catDelete($table, $cond)
		{
			return $this->db->delete($table, $cond);
		}
	}
 ?>