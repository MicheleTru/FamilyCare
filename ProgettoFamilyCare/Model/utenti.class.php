<?php
	class Utente{
		private $id;
		private $username;
		private $password;
		
		public function getId(){
			return $this->id;
		}
		
		public function getUsername(){
			return $this->username;
		}
		
		public function getPassword(){
			return $this->password;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		
		public function setUsername($username){
			$this->username=$username;
		} 
		
		public function setPassword($password){
			$this->password=$password;
		}
		
		public function save(){
			$query=sprintf("insert into utenti (username, password) values ('%s', SHA1('%s'));",
								$username,
								$password);
			
			mysql_query($query);
			#UtenteTabella::save($this);
		}
		
		public function delete(){
			UtenteTabella::remove($this);
		}
	}
?>
