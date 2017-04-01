<?php 
	
	/**
	* Main Model
	*/
	class ParentModel
	{
		protected $db = array();

		public function __construct()
		{
			$this->db = new Database();
		}
	}
 ?>