<?php 

	/**
	* 
	*/
	class ParentController
	{
		protected $load = array();
		function __construct()
		{
			$this->load = new Load();
		}
	}
 ?>