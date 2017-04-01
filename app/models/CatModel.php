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

		public function catList()
		{
			$sql = 'SELECT * FROM category';
			$query = $this->db->query($sql);
			$result = $query->fetchAll();

			return $result;

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
	}
 ?>