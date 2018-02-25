<?php
	class controller{
		public $load;
		public $model;
		
		function __construct() {
			$this->load = new Load();
			$this->model = new Model();
			$this->home();
		}
		
		function home() {
			$data = $this->model->getInfo();
			$this->load->view('view.php', $data);
			
			$this->model->set_user_id(01);
			$this->model->set_fname("Angel");
			$this->model->set_lname("Salas-Phillips");
			$this->model->set_email("email@outlook.com");
			$this->model->set_role("Web dEVELOPER");
			
		}
	}
	
?>