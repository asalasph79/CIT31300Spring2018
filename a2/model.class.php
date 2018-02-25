<?php
	class Model{
		
		protected $userID;
		protected $firstname;
		protected $lastname;
		protected $email;
		protected $role;
		
		public function set_user_id($userId){
			$this->userID = $userId;
		}
		public function set_fname($firstName){
			$this->firstname = $firstName;
		}
		public function set_lname($lastName){
			$this->lastname = $lastName;
		}
		public function set_email($email){
			$this->email = $email;
		}
		public function set_role($role){
			$this->role = $role;
		}
	
		public function get_user_id(){
			return $this->userID;
		}
		public function get_fname(){
			return $this->firstname;
		}
		public function get_lname(){
			return $this->lastname;
		}
		public function get_email(){
			return $this->email;
		}
		public function get_role(){
			return $this->role;
		}
		
		public function getInfo(){
			return array(
				'first'=>$this->get_user_id(),
				'second'=>$this->get_fname(),
				'third'=>$this->get_lname(),
				'fourth'=>$this->get_email(),
				'fifth'=>$this->get_role()
			);
		}
		
		function __construct(){
			$this->set_user_id(1);
			$this->set_fname("Angel");
			$this->set_lname("Salas-Phillips");
			$this->set_email("email@outlook.com");
			$this->set_role("Web Developer");
			
		}
	
		public function __destruct(){
			;
		}
	}
?>