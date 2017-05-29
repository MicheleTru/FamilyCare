<?php 

class Utente{
	 private $id;
	 private $username;
	 private $password;
	 

	 public function  setId($v) {
		 $this->id = $v;
	 }
	
	 public function  setUsername($v) {
		 $this->username = $v;
	 }
	 
	 public function  setPassword($v) {
		 $this->password = $v;
	 }
	 
	 public function getId(){
		 return $this->id;
	 }
	 
	 public function  getUsername() {
		 return $this->username;
	 }
	 
	 public function getPassword(){
		 return $this->password;
	 }
	 
	 public function save(){
		 UtenteTabella::save($this);
	 }
	 
	 public function modify(){
		 UtenteTabella::update($this);
	 }
	 
	 public function delete(){
		 UtenteTabella::delete($this);
	 }	
	
	 public function getGruppi(){
		 return GruppoTabella::getGruppiUtente($this);
	 }
	 
	 public function hasGroup($gruppo){
		 foreach ($this->getGruppi() as $g){
			 if ($g->getGroupname()==$gruppo)
				return TRUE;
		 }
		 return FALSE;
	 }
 }

?>
