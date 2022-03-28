<?php
		class User{
		private $name;
		private $surname;
		private $age;
		public function save_to_session(){
		$_SESSION['name'] = $this->name;
		$_SESSION['surname'] = $this->surname;
		$_SESSION['age'] = $this->age;			
			
		}
		public function load_from_form(){
			$this ->name =$_POST['name'];
			$this ->surname =$_POST['surname'];
			$this ->age =$_POST['age'];
			
		}
		/*    */
		public function get_name(){
		if(isset($this ->name)){
			return $this -> name;
		}
		}
		/*    */
		public function get_surname(){
		if(isset($this ->surname)){
			return $this -> surname;
			
		}
		}
		/*    */
		public function get_age(){
		if(isset($this ->age)){
			return $this -> age;
		}
			return '';
		}
		
	}




?>