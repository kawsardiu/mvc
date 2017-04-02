<?php 
	/**
	* Category controller
	*/
	class Category extends ParentController
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function categoryList()
		{
			$data = array();

			$table = 'category';

			$catModel = $this->load->model('CatModel');

			$data['cat'] = $catModel->catList($table);

			$this->load->view('category', $data);
		}

		public function catById()
		{

			$data = array();

			$table = 'category';

			$id = 5;

			$catModel = $this->load->model('CatModel');

			$data['catbyid'] = $catModel->catById($table, $id);

			$this->load->view('catbyid', $data);
		}

		public function addCategory()
		{
			$this->load->view('addcatagory');
			
		}

		public function insertCategory()
		{
			$table = 'category';

			$name = $_POST['name'];
			$title = $_POST['title'];

			$data = array(
					'name' => $name ,
					'title' => $title
				);

			$catModel = $this->load->model('CatModel');
			$result = $catModel->insertCat($table, $data);

			$mdata = array();

			if ($result == 1) {
				$mdata['msg'] = 'Category Added Successfully....';
			}else{
				$mdata['msg'] = 'Category Not Added....';

			}
			$this->load->view('addcatagory', $mdata);

		}

		public function updateCategory()
		{

			$data = array();

			$table = 'category';

			$id = 4;

			$catModel = $this->load->model('CatModel');

			$data['catById'] = $catModel->catById($table, $id);

			$this->load->view('updatecatagory', $data);
			
		}

		public function updateCat()
		{
			$table = 'category';

			$name = $_POST['name'];
			$title = $_POST['title'];
			$id = $_POST['id'];

			$cond = "id =" .  $id;

			$data = array(
					'name' => $name ,
					'title' => $title
				);

			$catModel = $this->load->model('CatModel');

			$result = $catModel->catUpdate($table, $data, $cond);


			$mdata = array();

			if ($result == 1) {
				$mdata['msg'] = 'Category Updated Successfully....';
			}else{
				$mdata['msg'] = 'Category Not Updated....';

			}
			$this->load->view('updatecatagory', $mdata);

		}

		public function deleteCat()
		{
			$table = 'category';
			$cond = 'id = 3';

			$catModel = $this->load->model('CatModel');
			$catModel->catDelete($table, $cond);
		}
	}
 ?>