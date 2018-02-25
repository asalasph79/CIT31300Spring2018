<?php
class User extends Model{
	
	function getName() {
		return ($this->firstname . " " . $this->lastname);
	}

	function __construct(){
		parent::__construct();
	}
	
	public function __destruct(){
		;
	}
}
?>