<?php 
	/**
	* 
	*/
	class Index extends ParentController
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$this->load->view('header');

			$data = array();

			$table = 'post';

			$postModel = $this->load->model('PostModel');

			$data['allpost'] = $postModel->getAllPost($table);


			$this->load->view('content', $data);
			$this->load->view('sidebar');
			$this->load->view('footer');
		}

		public function postDetails($id)
		{
			$data = array();

			$tablePost = 'post';
			$tableCat = 'category';

			//$id = $_GET[];

			$postModel = $this->load->model('PostModel');

			$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id);

			$this->load->view('header');

			$this->load->view('details', $data);
			$this->load->view('sidebar');
			$this->load->view('footer');	
		}

		public function postByCat()
		{
			
		}

	}

 ?>