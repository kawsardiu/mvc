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
			$data = array();

			$tablePost = 'post';
			$tableCat = 'category';

			$this->load->view('header');
			$catModel = $this->load->model('catModel');
			$data['allcat'] = $catModel->catList($tableCat);

			$this->load->view('search', $data);



			$postModel = $this->load->model('PostModel');

			$data['allpost'] = $postModel->getAllPost($tablePost, $tableCat);


			$this->load->view('content', $data);
			$this->load->view('sidebar',  $data);
			$this->load->view('footer');
		}

		public function postDetails($id)
		{


			$data = array();

			$tablePost = 'post';
			$tableCat = 'category';

			$postModel = $this->load->model('PostModel');

			$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id);

			$this->load->view('header');
			$catModel = $this->load->model('catModel');
			$data['allcat'] = $catModel->catList($tableCat);

			$this->load->view('search', $data);



			$this->load->view('details', $data);
			$data['allpost'] = $postModel->getAllPost($tablePost, $tableCat);

			
			$this->load->view('sidebar',  $data);
			$this->load->view('footer');	
		}

		public function postByCat($id)
		{

			$data = array();

			$tablePost = 'post';
			$tableCat = 'category';

			$postModel = $this->load->model('PostModel');

			$data['postbycat'] = $postModel->getPostByCat($tablePost, $tableCat, $id);

			$this->load->view('header');
			$catModel = $this->load->model('catModel');
			$data['allcat'] = $catModel->catList($tableCat);

			$this->load->view('search', $data);





			$this->load->view('postbycat', $data);
			$data['allpost'] = $postModel->getAllPost($tablePost, $tableCat);
			
		
			$this->load->view('sidebar',  $data);
			$this->load->view('footer');	
		}

	}

 ?>